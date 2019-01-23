<?php

namespace ajax;

class Ajax {
    
    public function ajaxRoute() {
        switch ($_POST['ajax']) {
            case 'addToBasket':
                $this->addToBasket();
                break;

            case 'removeFromBasket':
                $this->removeFromBasket();
                break;
            
            default:
                break;
        }
    }
    
    private function addToBasket() {
        if ( isset($_SESSION['basket']) ) {
            if ( count($_SESSION['basket']) >= 10 ) {
                $data['status'] = 'error';
                $data['text']   = 'Имате прекалено много продукти в кошницата';
                print_r(json_encode($data, JSON_UNESCAPED_UNICODE));
            }else {
                if ( in_array($_POST['id'], $_SESSION['basket']) ) {
                    $data['status'] = 'error';
                    $data['text']   = 'Този артикул е вече добавен';
                    print_r(json_encode($data, JSON_UNESCAPED_UNICODE));
                }else {
                    $_SESSION['basket'][] = $_POST['id'];
                    $data['status'] = 'success';
                    $data['text']   = 'Успешно добавен в кошницата';
                    print_r(json_encode($data, JSON_UNESCAPED_UNICODE));
                }
            }
        }else {
            $_SESSION['basket'] = [];
            $_SESSION['basket'][] = $_POST['id'];
            $data['status'] = 'success';
            $data['text']   = 'Успешно добавен в кошницата';
            print_r(json_encode($data, JSON_UNESCAPED_UNICODE));
        }
    }
    
    private function removeFromBasket() {
        try {
            $arr = $_SESSION['basket'];
            $newArr = [];
            $id = (int)$_POST['id'];
            foreach ($arr as $value) {
                if ( $value != $id ) {
                    $newArr[] = $value;
                }
            }
            $_SESSION['basket'] = $newArr;
            $data['status'] = 'success';
            $data['text']   = 'Премахнато от кошницата';
            
            print_r(json_encode($data, JSON_UNESCAPED_UNICODE));
        } catch (\Exception $ex) {

        }
    }
}


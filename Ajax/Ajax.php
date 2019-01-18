<?php

namespace ajax;

class Ajax {
    
    public function ajaxRoute() {
        if ( isset($_POST['addToBasket']) ) {
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
    }
    
}


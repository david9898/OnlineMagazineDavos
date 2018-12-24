<?php
/**
 * Created by PhpStorm.
 * User: Toshiba
 * Date: 21.12.2018 г.
 * Time: 15:52 ч.
 */

namespace app\http;


use app\repository\TownRepositoryInterface;
use app\services\UserServiceInterface;
use app\wrapper\CookieWrapper;
use app\wrapper\GetWrapper;
use app\wrapper\PostWrapper;
use app\wrapper\SessionWrapper;

class UserHttp extends HttpAbstract
{
    private $userServ;
    private $postArr;
    private $getArr;
    private $cookArr;
    private $sessArr;

    public function __construct(UserServiceInterface $userServ,
                                PostWrapper $postArr,
                                GetWrapper $getArr,
                                CookieWrapper $cookArr,
                                SessionWrapper $sessArr)
    {
        $this->userServ = $userServ;
        $this->postArr = $postArr;
        $this->getArr = $getArr;
        $this->cookArr = $cookArr;
        $this->sessArr = $sessArr;
    }

    public function registerUser(TownRepositoryInterface $townRepo)
    {
        if ( !$this->sessArr->checkSessionExists('id') ) {
            if ($this->postArr->checkIfExists('register')) {
                try {
                    if (!$this->cookArr->checkCookieExist('authorization')) {
                        $data['error'] = 'Нямате бисквитка за доказване на самоличност!!!';
                        $this->render('Users/register', $data);
                    }

                    /*
                     * @var
                     * UserDTO
                     */
                    $userDTO = $this->userServ->insertUser($this->postArr->getArray(),
                        $this->cookArr->getCookieElement('authorization'));

                    $this->sessArr->setSessionName('id', $userDTO->getId());
                    $this->sessArr->setSessionName('status', $userDTO->getStatus());

                    $this->redirect('/home');

                } catch (\Exception $e) {
                    print_r($e->getMessage());
                }
            } else {
                $towns = $townRepo->getAllTowns();
                $data = [];
                $data['towns'] = $towns;
                $this->render('Users/register', $data);
            }
        }else {
            $this->redirect('/profile');
        }
    }

    public function login()
    {
        if ( !$this->sessArr->checkSessionExists('id') ) {
            if ($this->postArr->checkIfExists('login')) {
                try {
                    $user = $this->userServ->getUserByEmail($this->postArr->getArray());

                    $this->sessArr->setSessionName('id', $user->getId());
                    $this->sessArr->setSessionName('status', $user->getStatus());

                    $this->redirect('/profile');
                } catch (\Exception $e) {
                    $data['error'] = $e->getMessage();
                    $this->render('Users/login', $data);
                }
            } else {
                $this->render('Users/login');
            }
        }else {
            $this->redirect('/profile');
        }
    }

    public function insertGuest()
    {
        if (!$this->cookArr->checkCookieExist('authorization')) {
            $cookie = $this->userServ->insertGuest();

            $this->cookArr->setCookieElement('authorization', $cookie, 30);
        }
    }
}
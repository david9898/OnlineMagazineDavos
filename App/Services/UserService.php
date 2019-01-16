<?php
/**
 * Created by PhpStorm.
 * User: Toshiba
 * Date: 19.12.2018 г.
 * Time: 18:26 ч.
 */

namespace app\services;


use app\data\UserDTO;
use app\repository\AddressRepositoryInterface;
use app\repository\TownRepositoryInterface;
use app\repository\UserRepositoryInterface;

class UserService implements UserServiceInterface
{
    private $userRepo;

    public function __construct(UserRepositoryInterface $userRepo)
    {
        $this->userRepo = $userRepo;
    }

    public function insertUser(array $postArr, string $cookie): UserDTO
    {
        $user = new UserDTO();

        $user->setCookie($cookie);

        if (isset($postArr['email_register'])) {
            $email = filter_var($postArr['email_register'], FILTER_VALIDATE_EMAIL);

            if ($email != null) {
                $user->setEmail($postArr['email_register']);
            } else {
                throw new \Exception('Invalid Email!!!');
            }
        } else {
            throw new \Exception('Email must be set!!!');
        }

        if (isset($postArr['password_register']) && isset($postArr['repeat_password_register'])) {
            if (strlen($postArr['password_register']) >= 3) {
                if ($postArr['password_register'] === $postArr['repeat_password_register']) {
                    $hashPass = hash('sha512', $postArr['password_register']);
                    $user->setPassword($hashPass);
                } else {
                    throw new \Exception('Passwords are not equals!!!');
                }
            } else {
                throw new \Exception('Password must be at least 3 symbols!!!');
            }
        } else {
            throw new \Exception('Passwords are not sets!!!');
        }

        if (isset($postArr['first_name_register'])) {
            if (strlen($postArr['first_name_register']) >= 3) {
                $user->setFirstName($postArr['first_name_register']);
            } else {
                throw new \Exception('First Name must be at least 3 symbols!!!');
            }
        } else {
            throw new \Exception('First Name must be set!!!');
        }

        if (isset($postArr['last_name_register'])) {
            if (strlen($postArr['last_name_register']) >= 3) {
                $user->setLastName($postArr['last_name_register']);
            } else {
                throw new \Exception('Last Name must be at least 3 symbols!!!');
            }
        } else {
            throw new Exception('Last Name must be set!!!');
        }

        if (isset($postArr['born_on_register'])) {
            $user->setBornOn($postArr['born_on_register']);
        } else {
            throw new \Exception('Birthday date must be set!!!');
        }

        if (isset($postArr['form_register_town'])) {
            $user->setTown($postArr['form_register_town']);
        } else {
            throw new \Exception('Town must be set!!!');
        }

        $user->setStatus('user');

        $this->userRepo->insertUser($user, $postArr['address1_register'], $postArr['address2_register']);

        return $this->userRepo->getUserByEmail($user->getEmail());
    }

    public function getUserByEmail(array $postArr): ?UserDTO
    {

        if ( isset($postArr['email_login']) ) {
            $email = $postArr['email_login'];
        }else {
            throw new \Exception('Въведи имейл');
        }

        if ( isset($postArr['password_login']) ) {
            $pass = $postArr['password_login'];
            $hashPass = hash('sha512', $pass);
        }else {
            throw new \Exception('Въведи парола');
        }

        $user = $this->userRepo->getUserByEmail($email);

        if ( $user === null ){
            throw new \Exception('Грешен имейл');
        }

        if ( $user->getPassword() === $hashPass ) {
            return $user;
        }else {
            throw new \Exception('Грешна парола');
        }

        return $user;
    }

    public function insertGuest(): string
    {
        $lastId = $this->userRepo->getLastUserId();

        $newId = $lastId->getId() + 1;

        $cookie = hash('sha512', $newId);

        $this->userRepo->insertGuest($cookie);

        return $cookie;
    }

    public function getUserData(int $id, TownRepositoryInterface $townRepo, AddressRepositoryInterface $addressRepo): array
    {
        $userData = $this->userRepo->getUserById($id);

        $userTown = $townRepo->getUserTown($userData->getTown());

        $userAddresses = $addressRepo->getUserAddresses($id);
        $addressArr = [];

        foreach ($userAddresses as $userAddress) {
            $addressArr[] = $userAddresses->current();
        }
        $data = [];

        $data['user'] = $userData;
        $data['town'] = $userTown;
        $data['addresses'] = $addressArr;

        return $data;
    }

}
<?php

namespace App\Service;

class UserService{

    public function geberateToken($user){

        $token = bin2hex(random_bytes(64));
        $expire = new \DateTime('1 day');
        
        $user->setToken($token);
        $user->setTokenExpire($expire);
    }

}
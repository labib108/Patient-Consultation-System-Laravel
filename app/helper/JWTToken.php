<?php

namespace App\helper;

use Exception;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;

class JWTToken
{
    public static function CreateToken($userEmail):string{
        $key =env('jwt_key');
        $payload=[
            'iss'=>'laravel-token',
            'iat'=>time(),
            'exp'=>time()+60*60,
            'userEmail'=>$userEmail
            //'userID'=>$userId
        ];
        return JWT::encode($payload,$key,'HS256');
    }


    public static function CreateTokenForSetPassword($userEmail):string{
        $key =env('jwt_key');
        $payload=[
            'iss'=>'laravel-token',
            'iat'=>time(),
            'exp'=>time()+60*20,
            'userEmail'=>$userEmail
            //'userID'=>'0'
        ];
        return JWT::encode($payload,$key,'HS256');
    }



    public static function VerifyToken($token):string|object
    {
        try {
            if($token==null){
                return 'unauthorized';
            }
            else{
                $key =env('jwt_key');
                return JWT::decode($token,new Key($key,'HS256'));
            }
        }
        catch (Exception $e){
            return 'unauthorized';
        }
    }
}

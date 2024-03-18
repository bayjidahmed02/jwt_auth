<?php

namespace App\Helper;

use Exception;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;

class JWTtoken
{
    public static function createToken($userEmail, $userId)
    {
        $key = env('JWT_KEY');
        $payload = [
            'iss' => 'coding-sports',
            'iat' => time(),
            'exp' => time() + 24 * 60 * 60,
            'userEmail' => $userEmail,
            'userId' => $userId
        ];
        return JWT::encode($payload, $key, 'HS256');
    }
    public static function verifyToken($token)
    {
        try {
            if ($token == null) {
                return 'unauth';
            } else {
                $key  = env('JWT_KEY');
                return JWT::decode($token, new Key($key, 'HS256'));
            }
        } catch (Exception) {
            return 'unauth';
        }
    }
}

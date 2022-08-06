<?php

namespace App\Helpers;

class JWTHelper {
    public static function payload(string $token) {
        $tokenParts     = explode(".", $token);  
        $tokenHeader    = base64_decode($tokenParts[0]);
        $tokenPayload   = base64_decode($tokenParts[1]);
        $jwtHeader      = json_decode($tokenHeader);
        $jwtPayload     = json_decode($tokenPayload);

        return $jwtPayload;
    }
}
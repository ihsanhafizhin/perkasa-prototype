<?php

namespace App\Http\Controllers;

use App\Helpers\JWTHelper;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\{Auth, Hash, Http};
use Illuminate\Support\Facades\Cookie;



class AuthController extends Controller
{
    public function login(Request $request) {
        try{
            $BASE_URL = env('API_URL');
            $endpoint = "$BASE_URL/api/login";    
            $request->validate([
                'username' => 'required',
                'password' => 'required',
            ]);    
            $response = Http::post($endpoint, [
                'username'  => $request->username,
                'password'  => $request->password,
            ])->object();
    
            if(!$response->JWT) throw new Exception();

            $data = JWTHelper::payload($response->JWT);
            $user = User::firstOrCreate(
                ['email' => "{$data->security->username}@example.com"],
                [   
                    'name'     => $data->security->username,
                    'password' => Hash::make('password')
                ]
            );
            $token = $response->JWT;                       
            Auth::login($user);


            
            $username_encrypt=$request->username;
            $password="password";
            $username_string=openssl_encrypt($username_encrypt,"AES-128-ECB",$password);
            
    
            $password_encrypt=$request->password;
            $password="password";
            $password_string=openssl_encrypt($password_encrypt,"AES-128-ECB",$password);


            
            
            Cookie::queue('cookiesp_1', $username_string);
            Cookie::queue('cookiesp_2', $password_string);
            Cookie::queue('cookiesp_3', $token);
            
            return redirect()->route('dashboard');
         
        }catch(Exception $err) {
            
            $this->logout();
        }
    }


    public function logout() {
        Cookie::queue(Cookie::forget('cookiesp_1'));
        Cookie::queue(Cookie::forget('cookiesp_2'));
        Cookie::queue(Cookie::forget('cookiesp_3'));
        Auth::logout();
        return redirect()->route('login.view');
    }
    
}

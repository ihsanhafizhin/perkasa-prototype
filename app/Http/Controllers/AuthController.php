<?php

namespace App\Http\Controllers;

use App\Helpers\JWTHelper;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\{Auth, Hash, Http};



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
            return redirect()->route('dashboard',compact('token'));
         
        }catch(Exception $err) {
            
            Auth::logout();
            return redirect()->route('login.view');
        }
    }


    public function logout() {
        Auth::logout();
        return redirect()->route('login.view');
    }
}

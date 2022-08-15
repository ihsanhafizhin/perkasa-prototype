<?php

namespace App\Http\Controllers;

use App\Helpers\JWTHelper;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\{Auth, Hash, Http};
use Illuminate\Support\Facades\Cookie;


class CookieController extends Controller
{
   
    
    public function getCookie() {
        try{    
                                                    
            $response = Cookie::get('access_token'); 
            // $response = "";
            if ($response) {
                return $response;
            } else {
                // dd("test");
                // $token = $this->autoLoginApi();
                // dd($token);
                Auth::logout();
                return redirect()->route('login.view');
            }
            
        }catch(Exception $err) {
                //dd("test2");   
                // $token = $this->autoLoginApi();
                // dd($token);       
                Auth::logout();
                return redirect()->route('login.view');
        }
    }  
    
    public function autoLoginApi() {

        //dd("test3");
        $BASE_URL = env('API_URL');           
        $api_url = $BASE_URL."/api/login";  
        //dd($api_url);
        $curl = curl_init();          
        curl_setopt_array($curl, array(
        CURLOPT_URL => $api_url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',        
        CURLOPT_POSTFIELDS => array(
            'username' => 'admin',
            'password' => 'admin'    
        ),
        CURLOPT_HTTPHEADER => array(
            'Cookie: perkasa2[JWT]=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzUxMiJ9.eyJpYXQiOjE2NjA1NDQzNTEsImp0aSI6IlRHWlE2ZEEyQ2luV3RmZ1pYbmU2NExcLzNsSDh5cXkzRFhrOUU3bFNYbkJNPSIsImlzcyI6InBlcmthc2EubWRhem9uZS5jb20iLCJuYmYiOjE2NjA1NDQzNTEsImV4cCI6MTY2MDU0NDk1MSwic2VjdXJpdHkiOnsidXNlcm5hbWUiOiJBZG1pbmlzdHJhdG9yIiwidXNlcmlkIjoiLTEiLCJwYXJlbnR1c2VyaWQiOm51bGwsInVzZXJsZXZlbGlkIjotMX19.7TX-OO7owkPV5tBEaqMYqapyP3rArMs-_f_eSAv-c83JVC3Aw_uPjggch6isMYasw4T1zEd5Z4AhbkeOSj_cvQ; perkasa2[LastUrl]=%2FRoList'
        ),
        ));

     $response = curl_exec($curl);
    
     $tokens = $response->JWT;  
     dd($tokens); 
     curl_close($curl);  
     //dd($response);  
     
                          
            
            
    Cookie::queue('access_token', $token);
    return redirect()->route('dashboard');
     
    }
   
}

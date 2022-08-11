<?php

namespace App\Http\Controllers;

use App\Helpers\JWTHelper;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\{Auth, Hash, Http};

class CURLController extends Controller
{
   
    public function curlGet($tokens,$api_urls) {
        try{        
            
            $token = $tokens;   
                                                                     
            $BASE_URL = env('API_URL');           
            $api_url = $BASE_URL.$api_urls;  
            
            $curl = curl_init();
            curl_setopt_array($curl, array(
            CURLOPT_URL => $api_url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json',
                'Authorization: Bearer '.$token,
                'Cookie: perkasa2[JWT]='.$token
            ),
            ));
            
            $response = curl_exec($curl);
            curl_close($curl);
            
            return $response;

        }catch(Exception $err) {
            
           
        }
    }

    public function curlAdd($tokens,$api_urls,$vArray) {
        try{
            //dd($vArray);
            $token = $tokens;                                              
            $BASE_URL = env('API_URL');           
            $api_url = $BASE_URL.$api_urls;    


            $curl = curl_init();

            curl_setopt_array($curl, array(
            CURLOPT_URL =>  $api_url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => array($vArray),
            //CURLOPT_POSTFIELDS => $vArray,
            CURLOPT_HTTPHEADER => array(
                'Cookie: perkasa2[JWT]='.$token
            ),
            ));

            $response = curl_exec($curl);

            curl_close($curl);

        }catch(Exception $err) {
            
           
        }
    }
   
}

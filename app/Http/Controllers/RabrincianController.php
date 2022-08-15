<?php

namespace App\Http\Controllers;

use App\Helpers\JWTHelper;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\{Auth, Hash, Http};
use Illuminate\Support\Facades\Cookie;

class RabrincianController extends Controller
{
    
    public function getRabrincian($token) {
        try{        
                                    
            $api_url = "/api/list/RabRincianView";              
            $response = app('App\Http\Controllers\CURLController')->curlGet($token,$api_url); 
            
            return $response;
        }catch(Exception $err) {            
            return "";
        }
    }

    public function addRabRincian(Request $request) {
        try{        
           
            $cbo_akun = $request->cbo_akun;
            $txt_d_uraian = $request->txt_d_uraian;
            $txt_volume = $request->txt_volume;
            $txt_satuan = $request->txt_satuan;
            $txt_harga = $request->txt_harga;
            $txt_total = $request->txt_total;

            $token = app('App\Http\Controllers\CookieController')->getCookie();                                            
            $BASE_URL = env('API_URL');           
            $api_url = "$BASE_URL/api/add/RabRincianAdd";   


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
            CURLOPT_POSTFIELDS => array(
                'kode_akun' => "521211",
                'uraian' =>"Service Komputer",
                'volum' => 0,
                'satuan' => "unit",
                'sbm' => 0,
                'subtotal' => 0
            ),
            CURLOPT_HTTPHEADER => array(
                'Cookie: perkasa2[JWT]='.$token
            ),
            ));

            $response = curl_exec($curl);

            curl_close($curl);                                 

        }catch(Exception $err) {

        }
    }  

    public function rab_rincian_delete(Request $request) {
        try{        
            
             $rab_rincian_id = $request->v_id;
            //$rab_rincian_id = 34;
            $token = app('App\Http\Controllers\CookieController')->getCookie();                                      
            $BASE_URL = env('API_URL');           
            $api_url = "$BASE_URL/api/delete/rab_rincian";   
                        
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
            CURLOPT_POSTFIELDS => array('rab_rincian_id' => $rab_rincian_id),
            CURLOPT_HTTPHEADER => array(
                'Authorization: Bearer '.$token,
                'Cookie: perkasa2[JWT]='.$token
            ),
            ));

            $response = curl_exec($curl);

            curl_close($curl);


            return redirect()->back();
        }catch(Exception $err) {
            
            Auth::logout();
            return redirect()->route('login.view');
        }
    }
   
}

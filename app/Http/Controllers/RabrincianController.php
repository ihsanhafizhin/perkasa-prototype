<?php

namespace App\Http\Controllers;

use App\Helpers\JWTHelper;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\{Auth, Hash, Http};

class RabrincianController extends Controller
{
   
    public function addRabRincian(Request $request) {
        try{        
           
            $token = $request->token; 
            $api_url = "/api/add/RabRincianAdd";  

            $cbo_akun = $request->cbo_akun;
            $vArray = "array(
                'kode_akun' => $cbo_akun,
                'uraian' => '',
                'volum' => '',
                'satuan' => '',
                'sbm' => '',
                'subtotal' => '',
                'id_rab' => ''
            )";
                               
            app('App\Http\Controllers\CURLController')->curlAdd($token,$api_url,$vArray);                                 

        }catch(Exception $err) {

        }
    }    
   
}

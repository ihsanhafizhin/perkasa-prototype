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
           
            $cbo_akun = $request->cbo_akun;
            $txt_d_uraian = $request->txt_d_uraian;
            $txt_volume = $request->txt_volume;
            $txt_satuan = $request->txt_satuan;
            $txt_harga = $request->txt_harga;
            $txt_total = $request->txt_total;

            $token = Cookie::get('access_token');                                             
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
   
}

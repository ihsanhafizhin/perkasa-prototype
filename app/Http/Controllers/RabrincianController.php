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
            $txt_d_uraian = $request->txt_d_uraian;
            $txt_volume = $request->txt_volume;
            $txt_satuan = $request->txt_satuan;
            $txt_harga = $request->txt_harga;
            $txt_total = $request->txt_total;
            
            // $vArray = "array(
            //     'kode_akun' => $cbo_akun,
            //     'uraian' => $txt_d_uraian,
            //     'volum' => $txt_volume,
            //     'satuan' => $txt_satuan,
            //     'sbm' => $txt_harga,
            //     'subtotal' => $txt_total,
            //     'id_rab' => ''
            // )";

            // $vArray = array(
            //     'kode_akun' => $cbo_akun,
            //     'uraian' => $txt_d_uraian,
            //     'volum' => $txt_volume,
            //     'satuan' => $txt_satuan,
            //     'sbm' => $txt_harga,
            //     'subtotal' => $txt_total,
            //     'id_rab' => ''
            // );

             $vArray = "array(
                'kode_akun' => $cbo_akun,
                'uraian' => $txt_d_uraian,
                'volum' => $txt_volume,
                'satuan' => $txt_satuan,
                'sbm' => $txt_harga,
                'subtotal' => $txt_total,
                'id_rab' => ''
            )";
                               
            app('App\Http\Controllers\CURLController')->curlAdd($token,$api_url,$vArray);                                 

        }catch(Exception $err) {

        }
    }    
   
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\JWTHelper;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\{Auth, Hash, Http};

class KomponenController extends Controller
{
    public function addKomponen(Request $request) {
        try{        
            

            $token = $request->token;      
            
            $BASE_URL = env('API_URL');           
            $api_url = "$BASE_URL/api/add/komponen";

            $id_komponen = $request->input('id_komponen');
            $kode_komponen = $request->input('kode_komponen');
            $ddkode_ro = $request->input('ddkode_ro');
            $nama_komponen = $request->input('nama_komponen');

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
                'id' => $id_komponen,
                'kode_komponen' => $kode_komponen,
                'nama_komponen' => $nama_komponen,
                'kode_ro' => $ddkode_ro
            ),
            CURLOPT_HTTPHEADER => array(
                'Authorization: Bearer '.$token,
                'Cookie: perkasa2[JWT]='.$token
            ),
            ));

            $response = curl_exec($curl);

            curl_close($curl);

            return redirect()->back();
        }catch(Exception $err) {
            dd($err->getMessage());
            Auth::logout();
            return redirect()->route('login.view');
        }
    }
}

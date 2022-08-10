<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\JWTHelper;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\{Auth, Hash, Http};

class SubKomponenController extends Controller
{
    public function addSubKomponen(Request $request) {
        try{        
            

            $token = $request->token;      
            
            $BASE_URL = env('API_URL');           
            $api_url = "$BASE_URL/api/add/subkomponen";

            $kode_subkomponen = $request->input('kode_subkomponen');
            $ddkode_komponen = $request->input('ddkode_komponen');
            $nama_subkomponen = $request->input('nama_subkomponen');

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
                'kode_subkomponen' => $kode_subkomponen,
                'nama_subkomponen' => $nama_subkomponen,
                'kode_komponen' => $ddkode_komponen
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

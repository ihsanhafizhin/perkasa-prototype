<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\JWTHelper;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\{Auth, Hash, Http};

class ROController extends Controller
{
    public function addRo(Request $request) {
        try{        
            

            $token = $request->token;      
            
            $BASE_URL = env('API_URL');           
            $api_url = "$BASE_URL/api/add/ro";

            $id_ro = $request->input('id_ro');
            $kode_ro = $request->input('kode_ro');
            $ddkode_kro = $request->input('ddkode_kro');
            $nama_ro = $request->input('nama_ro');

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
                'id' => $id_ro,
                'kode_ro' => $kode_ro,
                'nama_ro' => $nama_ro,
                'kode_kro' => $ddkode_kro
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

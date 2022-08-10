<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\JWTHelper;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\{Auth, Hash, Http};

class KROController extends Controller
{
    public function addKro(Request $request) {
        try{        
            

            $token = $request->token;      
            
            $BASE_URL = env('API_URL');           
            $api_url = "$BASE_URL/api/add/kro";

            $id_kro = $request->input('id_kro');
            $kode_kro = $request->input('kode_kro');
            $ddkode_kegiatan = $request->input('ddkode_kegiatan');
            $nama_kro = $request->input('nama_kro');

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
                'id' => $id_kro,
                'kode_kro' => $kode_kro,
                'nama_kro' => $nama_kro,
                'kode_kegiatan' => $ddkode_kegiatan
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

<?php

namespace App\Http\Controllers;

use App\Helpers\JWTHelper;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\{Auth, Hash, Http};

class KegiatanController extends Controller
{
   

    public function addKegiatan(Request $request) {
        try{        
            

            $token = $request->token;      
            
            $BASE_URL = env('API_URL');           
            $api_url = "$BASE_URL/api/add/kegiatan";

            $id_kegiatan = $request->input('id_kegiatan');
            $kode_kegiatan = $request->input('kode_kegiatan');
            $ddkode_program = $request->input('ddkode_program');
            $nama_kegiatan = $request->input('nama_kegiatan');

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
                'id' => $id_kegiatan,
                'kode_kegiatan' => $kode_kegiatan,
                'nama_kegiatan' => $nama_kegiatan,
                'kode_program' => $ddkode_program
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

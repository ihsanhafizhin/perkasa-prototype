<?php

namespace App\Http\Controllers;

use App\Helpers\JWTHelper;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\{Auth, Hash, Http};
use Illuminate\Support\Facades\Cookie;

class MasterKomponenController extends Controller
{
    public function indexKomponen(Request $request){
        try{   
         $token = app('App\Http\Controllers\CookieController')->getCookie(); 
         $listkomponens = app('App\Http\Controllers\KomponenController')->getKomponen($token);
         $listros = app('App\Http\Controllers\RoController')->getRo($token); 
 
         return view('komponen', [
            'listkomponen' => $listkomponens,
            'listro' => $listros,
         ]);
        }catch(Exception $err) {
             
         // Auth::logout();
         // return redirect()->route('login.view');
         return 'error';
         }
    }

    public function addKomponen(Request $request) {
        try{        
            

            $token = app('App\Http\Controllers\CookieController')->getCookie();      
            
            $BASE_URL = env('API_URL');           
            $api_url = "$BASE_URL/api/add/komponen";

            $kode_komponen = $request->input('kode_komponen');
            $kode_ro = $request->input('ddkode_ro');
            $nama_komponen = $request->input('nama_komponen');
            $id_komponen = $request->input('id_komponen');

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
                'kode_komponen'=> $kode_komponen,
                'kode_ro' => $kode_ro,
                'nama_komponen' => $nama_komponen,
            ),
            CURLOPT_HTTPHEADER => array(
                'Authorization: Bearer '.$token,
                'Cookie: perkasa2[JWT]='.$token
            ),
            ));

            $response = curl_exec($curl);

            curl_close($curl);

            // dd($id_program);
            return redirect()->back();
        }catch(Exception $err) {
            dd($err->getMessage());
            Auth::logout();
            return redirect()->route('login.view');
        }
    }
}

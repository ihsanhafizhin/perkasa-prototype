<?php

namespace App\Http\Controllers;

use App\Helpers\JWTHelper;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\{Auth, Hash, Http};
use Illuminate\Support\Facades\Cookie;

class MasterSubKomponenController extends Controller
{
    public function indexSubKomponen(Request $request){
        try{   
         $token = app('App\Http\Controllers\CookieController')->getCookie(); 
         $listkomponens = app('App\Http\Controllers\KomponenController')->getKomponen($token);
         $listsubKomponens = app('App\Http\Controllers\SubKomponenController')->getSubkomponen($token);
 
         return view('sub_komponen', [
            'listkomponen' => $listkomponens,
            'listsubKomponen'  => $listsubKomponens,
         ]);
        }catch(Exception $err) {
             
         // Auth::logout();
         // return redirect()->route('login.view');
         return 'error';
         }
    }

    public function addSubKomponen(Request $request) {
        try{        
            

            $token = app('App\Http\Controllers\CookieController')->getCookie();      
            
            $BASE_URL = env('API_URL');           
            $api_url = "$BASE_URL/api/add/subkomponen";

            $kode_subkomponen = $request->input('kode_subkomponen');
            $kode_komponen = $request->input('ddkode_komponen');
            $nama_subkomponen = $request->input('nama_subkomponen');
            $id_subkomponen = $request->input('id_subkomponen');

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
                'id' => $id_subkomponen,
                'kode_subkomponen'=> $kode_subkomponen,
                'kode_komponen' => $kode_komponen,
                'nama_subkomponen' => $nama_subkomponen,
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
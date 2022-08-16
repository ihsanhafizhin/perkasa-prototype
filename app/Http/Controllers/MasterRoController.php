<?php

namespace App\Http\Controllers;

use App\Helpers\JWTHelper;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\{Auth, Hash, Http};
use Illuminate\Support\Facades\Cookie;

class MasterRoController extends Controller
{
    public function indexRo(Request $request){
        try{   
         $token = app('App\Http\Controllers\CookieController')->getCookies(); 
         $listkros = app('App\Http\Controllers\KroController')->getKro($token);  
         $listros = app('App\Http\Controllers\RoController')->getRo($token); 
 
         return view('ro', [
            'listkro' => $listkros,
            'listro' => $listros,
         ]);
        }catch(Exception $err) {
             
         // Auth::logout();
         // return redirect()->route('login.view');
         return 'error';
         }
    }

    public function addRo(Request $request) {
        try{        
            

            $token = app('App\Http\Controllers\CookieController')->getCookies();      
            
            $BASE_URL = env('API_URL');           
            $api_url = "$BASE_URL/api/add/ro";

            $kode_ro = $request->input('kode_ro');
            $kode_kro = $request->input('ddkode_kro');
            $nama_ro = $request->input('nama_ro');
            $id_ro = $request->input('id_ro');

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
                'kode_ro'=> $kode_ro,
                'kode_kro' => $kode_kro,
                'nama_ro' => $nama_ro,
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
            
        }
    }
}

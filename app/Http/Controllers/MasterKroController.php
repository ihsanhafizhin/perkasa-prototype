<?php

namespace App\Http\Controllers;

use App\Helpers\JWTHelper;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\{Auth, Hash, Http};
use Illuminate\Support\Facades\Cookie;

class MasterKroController extends Controller
{
    public function indexKro(Request $request){
        try{   
         $token = app('App\Http\Controllers\CookieController')->getCookies(); 
         $listkros = app('App\Http\Controllers\KroController')->getKro($token);  
         $listkegiatans = app('App\Http\Controllers\KegiatanController')->getKegiatan($token); 
 
         return view('kro', [
            'listkegiatan' => $listkegiatans,
            'listkro' => $listkros,
          ]);
        }catch(Exception $err) {
             
         // Auth::logout();
         // return redirect()->route('login.view');
         return 'error';
         }
    }

    public function addKro(Request $request) {
        try{        
            

            $token = app('App\Http\Controllers\CookieController')->getCookies();      
            
            $BASE_URL = env('API_URL');           
            $api_url = "$BASE_URL/api/add/kro";

            $kode_kro = $request->input('kode_kro');
            $kode_kegiatan = $request->input('ddkode_kegiatan');
            $nama_kro = $request->input('nama_kro');
            $id_kro = $request->input('id_kro');

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
                'kode_kro'=> $kode_kro,
                'kode_kegiatan' => $kode_kegiatan,
                'nama_kro' => $nama_kro,
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

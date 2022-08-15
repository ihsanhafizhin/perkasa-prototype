<?php

namespace App\Http\Controllers;

use App\Helpers\JWTHelper;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\{Auth, Hash, Http};
use Illuminate\Support\Facades\Cookie;

class MasterKegiatanController extends Controller
{
    public function indexKegiatan(Request $request){
        try{   
         $token = app('App\Http\Controllers\CookieController')->getCookie(); 
         $listprograms = app('App\Http\Controllers\ProgramController')->getProgram($token); 
         $listkegiatans = app('App\Http\Controllers\KegiatanController')->getKegiatan($token); 
 
         return view('kegiatan', [
             'listprogram' => $listprograms,
             'listkegiatan' => $listkegiatans
          ]);
        }catch(Exception $err) {
             
         // Auth::logout();
         // return redirect()->route('login.view');
         return 'error';
         }
    }
    public function addKegiatan(Request $request) {
        try{        
            

            $token = app('App\Http\Controllers\CookieController')->getCookie();      
            
            $BASE_URL = env('API_URL');           
            $api_url = "$BASE_URL/api/add/kegiatan";

            $kode_kegiatan = $request->input('kode_kegiatan');
            $kode_program = $request->input('ddkode_program');
            $nama_kegiatan = $request->input('nama_kegiatan');
            $id_kegiatan = $request->input('id_kegiatan');

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
                'kode_kegiatan'=> $kode_kegiatan,
                'kode_program' => $kode_program,
                'nama_kegiatan' => $nama_kegiatan,
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

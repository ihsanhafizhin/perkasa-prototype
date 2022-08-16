<?php

namespace App\Http\Controllers;

use App\Helpers\JWTHelper;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\{Auth, Hash, Http};
use Illuminate\Support\Facades\Cookie;

class MasterProgramController extends Controller
{
    public function indexProgram(Request $request){
       try{   
        $token = app('App\Http\Controllers\CookieController')->getCookies(); 
        $listprograms = app('App\Http\Controllers\ProgramController')->getProgram($token); 

        return view('program', [
            'listprogram' => $listprograms
         ]);
       }catch(Exception $err) {
            
        // Auth::logout();
        // return redirect()->route('login.view');
        return 'error';
        }
    }

    public function addProgram(Request $request) {
        try{        
            

            $token = app('App\Http\Controllers\CookieController')->getCookies();      
            
            $BASE_URL = env('API_URL');           
            $api_url = "$BASE_URL/api/add/program";

            $kode_program = $request->input('kode_program');
            $nama_program = $request->input('nama_program');
            $id_program = $request->input('id_program');

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
                'id' => $id_program,
                'kode_program' => $kode_program,
                'nama_program' => $nama_program,
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

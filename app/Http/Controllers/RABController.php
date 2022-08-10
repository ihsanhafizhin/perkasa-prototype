<?php

namespace App\Http\Controllers;

use App\Helpers\JWTHelper;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\{Auth, Hash, Http};

class RABController extends Controller
{
   
    public function rab_kegiatan(Request $request) {
        try{        
            
            $token = $request->token;   
            $listsatkers = app('App\Http\Controllers\SatkerController')->getSatker($token);
            $listprograms = app('App\Http\Controllers\ProgramController')->getProgram($token); 
            $listkegiatans = app('App\Http\Controllers\KegiatanController')->getKegiatan($token); 
            $listkros = app('App\Http\Controllers\KroController')->getKro($token); 
            $listros = app('App\Http\Controllers\RoController')->getRo($token); 
            $listsubKomponens = app('App\Http\Controllers\SubKomponenController')->getSubkomponen($token);
            $listakuns = app('App\Http\Controllers\AkunController')->getAkun($token);
            
            
            
            
                                                     
            $BASE_URL = env('API_URL');           
            $api_url = "$BASE_URL/api/list/kegiatan";            
            $curl = curl_init();
            curl_setopt_array($curl, array(
            CURLOPT_URL => $api_url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json',
                'Authorization: Bearer '.$token,
                'Cookie: perkasa2[JWT]='.$token
            ),
            ));

            $responses = curl_exec($curl);
            curl_close($curl);
            
            return view('rab_kegiatan', [
                'response' => $responses,
                'listsatker' => $listsatkers,
                'token' => $token,
                'listprogram' => $listprograms,
                'listkegiatan' => $listkegiatans,
                'listkro' => $listkros,
                'listro' => $listros,
                'listsubKomponen'  => $listsubKomponens,
                'listakun'  => $listakuns,
             ]);

        }catch(Exception $err) {
            
            Auth::logout();
            return redirect()->route('login.view');
        }
    }



    public function rab_delete(Request $request) {
        try{        
            

            $token = $request->token;                                    
            $BASE_URL = env('API_URL');           
            $api_url = "$BASE_URL/api/delete/rab";     

            $curl = curl_init();

            curl_setopt_array($curl, array(
            CURLOPT_URL => $api_url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => array('id_rab' => '39'),
            CURLOPT_HTTPHEADER => array(
                'Authorization: Bearer '.$token,
                'Cookie: perkasa2[JWT]='.$token
            ),
            ));

            $response = curl_exec($curl);

            curl_close($curl);


            return redirect()->back();
        }catch(Exception $err) {
            
            Auth::logout();
            return redirect()->route('login.view');
        }
    }


    public function addRab(Request $request) {
        try{        
           
            $cbo_satker = $request->cbo_satker;
            $cbo_program = $request->cbo_program;
            $cbo_kegiatan = $request->cbo_kegiatan;
            $cbo_kro = $request->cbo_kro;
            $cbo_ro = $request->cbo_ro;
            $cbo_subkomponen = $request->cbo_subkomponen;
            $cbo_akun = $request->cbo_akun;

          

            $token = $request->token;                                            
            $BASE_URL = env('API_URL');           
            $api_url = "$BASE_URL/api/add/RabAdd";   
            
            //dd($token);

            $curl = curl_init();

            curl_setopt_array($curl, array(
                
            CURLOPT_URL => $api_url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => array(
                'satker_id' => $cbo_satker,
                'kode_program' => $cbo_program,
                'kode_kegiatan' => $cbo_kegiatan,
                'kode_kro' => $cbo_kro,
                'kode_komponen' => '',
                'kode_subkomponen' => $cbo_subkomponen,
                'kode_ro' => $cbo_ro

            ),
            CURLOPT_HTTPHEADER => array(
                'Cookie: perkasa2[JWT]='.$token
            ),
            ));

            $response = curl_exec($curl);

            curl_close($curl);


            // =============

            $token = $request->token;                                            
            $BASE_URL = env('API_URL');           
            $api_url = "$BASE_URL/api/add/RabRincianAdd";   


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
                'kode_akun' => $cbo_akun,
                'uraian' => '',
                'volum' => '',
                'satuan' => '',
                'sbm' => '',
                'subtotal' => '',
                'id_rab' => ''
            ),
            CURLOPT_HTTPHEADER => array(
                'Cookie: perkasa2[JWT]='.$token
            ),
            ));

            $response = curl_exec($curl);

            curl_close($curl);

            // ===========

            return redirect()->back();
        }catch(Exception $err) {
            
            Auth::logout();
            return redirect()->route('login.view');
        }
    }
   
}

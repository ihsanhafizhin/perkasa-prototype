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
                'listprogram' => $listprograms
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
            dd($request->cbo_satker);


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
                'satker_id' => '656951',
                'kode_program' => '076.CQ',
                'kode_kegiatan' => '3356',
                'kode_kro' => 'BAB',
                'kode_komponen' => '005',
                'kode_subkomponen' => 'AA',
                'kode_ro' => '10'

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
                'kode_akun' => '521211',
                'uraian' => 'Service Komputer',
                'volum' => '12',
                'satuan' => 'unit',
                'sbm' => '1080000.00',
                'subtotal' => '10800000.00',
                'id_rab' => '41'
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

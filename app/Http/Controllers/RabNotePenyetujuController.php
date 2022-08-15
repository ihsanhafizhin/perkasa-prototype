<?php

namespace App\Http\Controllers;

use App\Helpers\JWTHelper;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\{Auth, Hash, Http};

class RabNotePenyetujuController extends Controller
{
   

    public function addRabNotePenyetuju(Request $request) {
        try{        
            
            $token = $request->token;  
            //dd($token);                                          
            $BASE_URL = env('API_URL');           
            $api_url = "$BASE_URL/api/add/rab_note_penyetuju";   

            $txt_Note_Penyetuju = $request->txt_Note_Penyetuju;  

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
            CURLOPT_POSTFIELDS => array('note' => $txt_Note_Penyetuju),
            CURLOPT_HTTPHEADER => array(
                'Cookie: perkasa2[JWT]='.$token
            ),
            ));

            $response = curl_exec($curl);
            curl_close($curl);

            return redirect()->back();
        }catch(Exception $err) {
            
            
        }
    }
   
}

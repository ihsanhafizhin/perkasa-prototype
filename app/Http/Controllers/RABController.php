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
            //$api_url = "https://perkasa.mdazone.com/api/list/rab?table=rab";
            $api_url = "https://perkasa.mdazone.com/api/list/kegiatan";
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

           //dd($response);

            //return view('rab_kegiatan',compact('$response'));

            return view('rab_kegiatan', [
                'response' => $responses
             ]);

        }catch(Exception $err) {
            dd($err->getMessage());
            Auth::logout();
            return redirect()->route('login.view');
        }
    }


   
}

<?php

namespace App\Http\Controllers;

use App\Helpers\JWTHelper;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\{Auth, Hash, Http};

class RabNotePenelaahController extends Controller
{
   

    // public function addRabNotePenelaah(Request $request) {
    //     try{                             
    //         $api_url = "$BASE_URL/api/add/rab_note_penelaah";   
    //         $txt_Note_Penelaah = $request->txt_Note_Penelaah;  

    //         $v_arr = array($v_txt_Note_Penelaah);
    //         //$v_arr = (array)$arr;

    //         $request->request->add(['v_arr' => $v_arr]);

    //         $this->curlAdds($request);

    //         return redirect()->back();
    //     }catch(Exception $err) {
            
            
    //     }
    // }

    

    public function curlAdds(Request $request) {
        try{        
            
            $token = app('App\Http\Controllers\CookieController')->getCookies();                                            
            $BASE_URL = env('API_URL');  
            $api_url = $request->api_url; 

            $arr = $request->v_arr; 

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
            CURLOPT_POSTFIELDS => array('note' => $arr),
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

    
public function addRabNotePenelaah(Request $request) {
        try{        
            
            $token = $request->token;                                            
            $BASE_URL = env('API_URL');           
            $api_url = "$BASE_URL/api/add/rab_note_penelaah";   

            $txt_Note_Penelaah = $request->txt_Note_Penelaah;  

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
            CURLOPT_POSTFIELDS => array('note' => $txt_Note_Penelaah),
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

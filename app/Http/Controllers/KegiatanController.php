<?php

namespace App\Http\Controllers;

use App\Helpers\JWTHelper;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\{Auth, Hash, Http};

class KegiatanController extends Controller
{
   
    
    public function getKegiatan($token) {
        try{        
                                    
            $api_url = "/api/list/KegiatanList";              
            $response = app('App\Http\Controllers\CURLController')->curlGet($token,$api_url); 
            
            if ($response) {
                return $response;
            } else {
                Auth::logout();
                return redirect()->route('login.view');
            }
            
        }catch(Exception $err) {            
            Auth::logout();
            return redirect()->route('login.view');
        }
    }

    



    public function addProgram(Request $request) {
        try{        
            

            $token = $request->token;                                    
            dd($token);
            return redirect()->back();
        }catch(Exception $err) {
            
            Auth::logout();
            return redirect()->route('login.view');
        }
    }
   
}

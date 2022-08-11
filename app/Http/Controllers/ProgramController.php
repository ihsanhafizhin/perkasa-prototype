<?php

namespace App\Http\Controllers;

use App\Helpers\JWTHelper;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\{Auth, Hash, Http};

class ProgramController extends Controller
{
   
    
    
    public function getProgram($token) {
        try{        
                                    
            $api_url = "/api/list/ProgramView";              
            $response = app('App\Http\Controllers\CURLController')->curlGet($token,$api_url); 
            
            return $response;
        }catch(Exception $err) {            
            return "";
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

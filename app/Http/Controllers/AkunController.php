<?php

namespace App\Http\Controllers;

use App\Helpers\JWTHelper;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\{Auth, Hash, Http};

class AkunController extends Controller
{
   
    

    public function getAkun($token) {
        try{        
                                    
            $api_url = "/api/list/AkunList";              
            $response = app('App\Http\Controllers\CURLController')->curlGet($token,$api_url); 
            
            return $response;
        }catch(Exception $err) {            
            return "";
        }
    }

   
   
}

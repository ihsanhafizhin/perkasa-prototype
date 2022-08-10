<?php

namespace App\Http\Controllers;

use App\Helpers\JWTHelper;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\{Auth, Hash, Http};

class KomponenController extends Controller
{
   
    public function getKomponen($token) {
        try{        
                                    
            $api_url = "/api/list/KomponenList";              
            $response = app('App\Http\Controllers\CURLController')->curlGet($token,$api_url); 
            
            return $response;
        }catch(Exception $err) {            
            return "";
        }
    }

   
   
}

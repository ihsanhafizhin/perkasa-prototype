<?php

namespace App\Http\Controllers;

use App\Helpers\JWTHelper;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\{Auth, Hash, Http};
use Illuminate\Support\Facades\Cookie;

class CookieController extends Controller
{
   
    
    public function getCookie() {
        try{                                            
            $response = Cookie::get('access_token'); 
            
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
   
}

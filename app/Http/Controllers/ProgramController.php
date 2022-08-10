<?php

namespace App\Http\Controllers;

use App\Helpers\JWTHelper;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\{Auth, Hash, Http};

class ProgramController extends Controller
{
   

    public function addProgram(Request $request) {
        try{        
            

            $token = $request->token;                                    
            dd($token);
            return redirect()->back();
        }catch(Exception $err) {
            dd($err->getMessage());
            Auth::logout();
            return redirect()->route('login.view');
        }
    }
   
}

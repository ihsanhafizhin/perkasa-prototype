<?php

namespace App\Http\Controllers;

use App\Helpers\JWTHelper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AuthController extends Controller
{
    public function login(Request $request) {
        $BASE_URL = env('API_URL');
        $endpoint = "$BASE_URL/api/login";

        $response = Http::post($endpoint, [
            'username'  => $request->username,
            'password'  => $request->password,
        ])->object();

        // dd(JWTHelper::payload($response->JWT));
        return redirect('/');
    }
}

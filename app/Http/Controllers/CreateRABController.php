<?php

namespace App\Http\Controllers;

use App\Helpers\JWTHelper;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client as GuzClient;
use Illuminate\Support\Facades\{Auth, Hash, Http};

class CreateRABController extends Controller
{
    public static $BASE_URI = 'https://perkasa.mdazone.com';
	

    public function addProgram(Request $r){
		$token = $r->token;      
		$headers = [
			'Authorization' => 'Bearer'.$token,
			];
    	$client = new GuzClient();
		$request = $client->post(self::$BASE_URI.'/api/add/program', [
			'form_params' => $r->input()
		], $headers);
		$response = json_decode($request->getBody());

		if ($response->status == 200) {
			return redirect()->route('dashboard');
		}
    }

	// public function addProgram(Request $request){
 
	// $client = new GuzClient();

	// 	$headers = [
	// 		'Authorization' => 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzUxMiJ9.eyJpYXQiOjE2NjAwOTgxOTgsImp0aSI6InpENjM5UHQ3aVVhbE84dDF1dkhLUGQwUjF3d2QwQXdkazU5MHNIRXNGSTQ9IiwiaXNzIjoicGVya2FzYS5tZGF6b25lLmNvbSIsIm5iZiI6MTY2MDA5ODE5OCwiZXhwIjoxNjYwMDk4Nzk4LCJzZWN1cml0eSI6eyJ1c2VybmFtZSI6IkFkbWluaXN0cmF0b3IiLCJ1c2VyaWQiOiItMSIsInBhcmVudHVzZXJpZCI6bnVsbCwidXNlcmxldmVsaWQiOi0xfX0.XAV_EZKM87sxFt0rCmcwoQ141c_Q_XDLGAmToTW70FyFJvOCW760wU7vxx9V9nNuQC6KrKICHfbBnUbJMU-OAw',
	// 		'Cookie' => 'perkasa2[JWT]=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzUxMiJ9.eyJpYXQiOjE2NjAwOTgxOTgsImp0aSI6InpENjM5UHQ3aVVhbE84dDF1dkhLUGQwUjF3d2QwQXdkazU5MHNIRXNGSTQ9IiwiaXNzIjoicGVya2FzYS5tZGF6b25lLmNvbSIsIm5iZiI6MTY2MDA5ODE5OCwiZXhwIjoxNjYwMDk4Nzk4LCJzZWN1cml0eSI6eyJ1c2VybmFtZSI6IkFkbWluaXN0cmF0b3IiLCJ1c2VyaWQiOiItMSIsInBhcmVudHVzZXJpZCI6bnVsbCwidXNlcmxldmVsaWQiOi0xfX0.XAV_EZKM87sxFt0rCmcwoQ141c_Q_XDLGAmToTW70FyFJvOCW760wU7vxx9V9nNuQC6KrKICHfbBnUbJMU-OAw'
	//   	];
		
	// 	$options = [
	// 	'multipart' => [
	// 		[
	// 		'name' => 'id',
	// 		'contents' => '4'
	// 		],
	// 		[
	// 		'name' => 'kode_program',
	// 		'contents' => '3254.QE'
	// 		],
	// 		[
	// 		'name' => 'nama_program',
	// 		'contents' => 'testing'
	// 		]
	// 	]];
	// 	$request = new Request('POST', 'https://perkasa.mdazone.com/api/add/program', $headers);
	// 	$res = $client->sendAsync($request, $options)->wait();
	// 	// dd($res);
	// 	echo $res->getBody();
	// }
}

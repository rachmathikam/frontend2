<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;
use Auth;
use Session;
use Redirect;

class LoginApiController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function loginApi(Request $request)

    {
        try {
        $http = new \GuzzleHttp\Client;

        $email = $request->email;
        $password = $request->password;

        $response = $http->post('http://127.0.0.1:9000/api/login',[
            'headers' => ['Authorization' => 'Bearer '.session()->get('token.access_token')
        ],
        'query' => [
            'email'=> $email,
            'password'=> $password
            ]
        ]);
        dd($response);
        // return dd($response);
        $result = json_decode((string)$response->getBody(), true);
            return view('/home');

            }catch(\Exception $e){
                return redirect()->back()->with('error','login failed');
            }

    }


    public function logout()
    {
        Auth::logout();
        Session::flush();
        return Redirect::to('login');

    }
}

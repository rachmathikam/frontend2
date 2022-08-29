<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;


class FrontendController extends Controller
{
        public function index()
        {

            $client = new Client();

            $response = $client->request('GET', 'http://127.0.0.1:9000/api/gurus',[
                'headers' => [
                    'accept'=>'application/json',
                    'content-type' => 'application/json',


                ],

            ]);
            dd($response);

            $a = json_decode((string) $response->getBody(),true);

            return view('guru.index')->with('guru',$a);




        }
}

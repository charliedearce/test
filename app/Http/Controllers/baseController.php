<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class baseController extends Controller
{
    public function api($url,$inputdata){
        $data = array(
            "email" => "test@yahoo.com",
            "password" => "test123"

        );
        //$url = "http://myapi.app/api/authentication";
        $content = json_encode($inputdata);

        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_HEADER, false);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER,
            array("Content-type: application/json"));
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $content);

        $json_response = curl_exec($curl);

        $response['status'] = curl_getinfo($curl, CURLINFO_HTTP_CODE);

        curl_close($curl);

        //$response['token'] = json_decode($json_response);

        //$test = $response->token;
        return $response;
    }
}

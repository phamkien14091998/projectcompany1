<?php


namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Ixudra\Curl\Facades\Curl;
use App\Http\Requests;
use Illuminate\Http\Request;

class apiControllers extends Controller
{
    public function getListUser($path, $data = []) {
        $respone = Curl::to($path)
            ->withData($data)
            ->post();
        $api_result=trim($respone,"?");
        $xml = simplexml_load_string($api_result);
        $json = json_encode($xml);
        $data = json_decode($json,TRUE);
        return $data;
    }

    public function updateUser($path, $data = []) {
        $respone = Curl::to($path)
            ->withData($data)
            ->post();
        $json = json_encode($respone);
        $data = json_decode($json,TRUE);
        return $data;
    }

    public function getFormUser($path, $data = []) {
        $respone = Curl::to($path)
            ->withData($data)
            ->post();
        $respone = mb_convert_encoding($respone, "UTF-8", "Shift-JIS");
        return $respone;
    }


}
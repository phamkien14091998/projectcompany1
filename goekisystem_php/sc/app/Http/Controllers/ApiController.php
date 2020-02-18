<?php namespace App\Http\Controllers;

use App\Helpers\UtilHelper;
use App\Http\Controllers\Controller;
use Ixudra\Curl\Facades\Curl;

class ApiController extends Controller {


    public function sendPost($url, $data) {
        $response = Curl::to($url)->withData($data)->post();
        $response = UtilHelper::readDataXml($response);
        return $response;
    }

    public function senGet($url, $data) {
        $response = Curl::to($url)->withData($data)->get();
        $response = UtilHelper::readDataXml($response);
        return $response;
    }

}

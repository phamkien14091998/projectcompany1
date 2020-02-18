<?php namespace App\Http\Controllers;


use Ixudra\Curl\Facades\Curl;



class ApiController extends Controller {


    public function getApi($path, $data = []) {
        $response = Curl::to($path)
            ->withData($data)
            ->post();
        $num=strpos($response,'</result>?', 0);
        $num=$num+9;
        $api_result = substr($response,0,$num);
        $xml = simplexml_load_string($api_result);
        $json = json_encode($xml);
        $data = json_decode($json,TRUE);
        return $data;
    }


}

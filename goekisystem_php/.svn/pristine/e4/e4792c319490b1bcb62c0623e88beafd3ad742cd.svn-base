<?php


namespace App\Http\Controllers;

use App\Helpers\UtilHelper;
use Ixudra\Curl\Facades\Curl;

class apiControllers extends Controller
{
    public function getListUser($path, $data = []) {
        $respone = Curl::to($path)
            ->withData($data)
            ->post();
        $respone = UtilHelper::formatResponseXML($respone);
        $xml = simplexml_load_string($respone);
        $xml = json_encode($xml);
        $xml = UtilHelper::replaceXMLSpecialChar($xml);
        $data = json_decode($xml,TRUE);
        return $data;
    }

    public function checkNameGirl($path, $data = []) {
        $respone = Curl::to($path)
            ->withData($data)
            ->post();
        return $respone;
    }

    public function callApiFile($path, $data, $img, $directory_img, $girl_cd) {
        $response = Curl::to($path)
            ->withData($data)
            ->withFile( 'Filedata',public_path("/img/{$directory_img}/{$girl_cd}/{$img}"),'image/jpeg', $img)
            ->post();
        return $response;
    }

    public function callApiFileArea($path, $data, $img, $directory_img) {
        $response = Curl::to($path)
            ->withData($data)
            ->withFile( 'Filedata',public_path("/img/{$directory_img}/{$img}"),'image/jpeg', $img)
            ->post();
        return $response;
    }


}
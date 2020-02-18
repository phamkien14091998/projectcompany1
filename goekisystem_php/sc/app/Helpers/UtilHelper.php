<?php
/**
 * Created by PhpStorm.
 * User: MyPC
 * Date: 25/03/2019
 * Time: 2:53 CH
 */

namespace App\Helpers;
use PhpParser\Serializer\XML;
class UtilHelper
{

    public static function readDataXml($xml) {
        //$xml = \XMLParser::read($xml);
        echo substr($xml, 0, -3);die();
        $xmlResponse = simplexml_load_string(substr($xml, 0, -3));
        $responseArray = json_decode(json_encode($xmlResponse), true);
        return $responseArray;
    }
}





<?php

namespace App\Helpers;

class UtilHelper
{
    public static function formatResponseXML($data) {
        $num=strpos($data,'</result>?', 0);
        $num=$num+9;
        $data = substr($data,0,$num);
        $data = preg_replace ('/[^\x{0009}\x{000a}\x{000d}\x{0020}-\x{D7FF}\x{E000}-\x{FFFD}]+/u', '', $data);
        $data = str_replace(['&'], ['{{a}}'], $data);

        return $data;
    }

    public static function replaceXMLSpecialChar($data) {
        return str_replace(['{{a}}'], ['&'], $data);
    }


}
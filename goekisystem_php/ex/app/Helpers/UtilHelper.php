<?php
/**
 * Created by PhpStorm.
 * User: MyPC
 * Date: 25/03/2019
 * Time: 2:53 CH
 */

namespace App\Helpers;
class UtilHelper
{
    public static function  formatDataRiseSale($from_date,$to_date,$client_cd) {
        $data = [
            'from_date' =>$from_date,
            'to_date' =>$to_date,
            'client_cd' =>$client_cd
        ];

        return $data;
    }

    public static function  formatDataStatistic($dateA,$dateB,$from_date,$to_date,$client_cd) {
        $data = [
            'dateA' =>$dateA,
            'dateB' =>$dateB,
            'from_date' =>$from_date,
            'to_date' =>$to_date,
            'client_cd' =>$client_cd
        ];

        return $data;
    }

}





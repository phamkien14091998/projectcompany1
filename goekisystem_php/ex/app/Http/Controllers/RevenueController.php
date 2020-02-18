<?php namespace App\Http\Controllers;
use Orchestra\Parser\Xml\Facade as XmlParser;


use App\Helpers\ConstantHelper;
use App\Helpers\UtilHelper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class RevenueController extends Controller {
    public function index(Request $request)
    {
        $client_cd= ConstantHelper::$client_cd;
        $api = new ApiController();
        $pathExLogin = ConstantHelper::$DOMAIN_EX.ConstantHelper::$RISE_SALE2_GET_DATE;
        $data = $api->getApi($pathExLogin, UtilHelper::formatDataRiseSale("","",$client_cd));
        return view('pages.revenue.index')->with(['data' => $data]);
    }

    public static function getClient(Request $request){
        $api = new ApiController();
        $pathExLogin = ConstantHelper::$DOMAIN_EX.ConstantHelper::$GET_CLIENT;
        $data = $api->getApi($pathExLogin, UtilHelper::formatDataRiseSale("","",""));
        return view('pages.revenue.get_client_cd')->with(['data' => $data]);
    }

    public static function getSaleMonth(Request $request){
        $client_cd = $request->input('client_cd');
        $api = new ApiController();
        $pathExLogin = ConstantHelper::$DOMAIN_EX.ConstantHelper::$RISE_SALE2_GET_SALE_MONTH;
        $data = $api->getApi($pathExLogin, UtilHelper::formatDataRiseSale("","",$client_cd));
        return view('pages.revenue.get_list_sale')->with(['data' => $data]);
    }
    public static function getSaleDay(Request $request){
        $client_cd = $request->input('client_cd');
        $api = new ApiController();
        $pathExLogin = ConstantHelper::$DOMAIN_EX.ConstantHelper::$RISE_SALE2_GET_SALE_DATE;
        $time_start = $request->input('time-start');
        $time_end = $request->input('time-end');
        $data = $api->getApi($pathExLogin, UtilHelper::formatDataRiseSale($time_start,$time_end,$client_cd));
        return view('pages.revenue.get_list_sale')->with(['data' => $data]);
    }
}

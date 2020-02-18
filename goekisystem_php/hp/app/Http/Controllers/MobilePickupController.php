<?php
namespace App\Http\Controllers;

use App\Helpers\ConstantHelper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MobilePickupController extends Controller
{
    public function index(Request $request){
        $api = new apiControllers();
        $client_cd = Auth::user()->client_cd;
        $array = [
            'client_cd' => $client_cd,
            'ranking_flg' => 1
        ];
        $array_name = [
            'client_cd' => $client_cd,
            'img_path' => ConstantHelper::$IMG_PATH
        ];
        $pathHpLoginName = ConstantHelper::$DOMAIN_HP.ConstantHelper::$GIRL_SELECT;
        $api_result_name = $api->getListUser($pathHpLoginName, $array_name);
        $pathHpLogin = ConstantHelper::$DOMAIN_HP.ConstantHelper::$MOBILE_PICKUP_SELECT;
        $api_result = $api->getListUser($pathHpLogin, $array);
        return view('pages.mobile_pickup.mobile_pickup')->with(['r' => $request, 'data' => $api_result, 'data_name' => $api_result_name]);
    }

    public function update(Request $request){
        $api = new apiControllers();
        $client_cd = Auth::user()->client_cd;
        $array = [
            'client_cd' => $client_cd,
            'ranking1' => $request->input('ranking1'),
            'ranking2' => $request->input('ranking2'),
            'ranking3' => $request->input('ranking3'),
            'ranking4' => $request->input('ranking4')
        ];
        $pathHpLogin = ConstantHelper::$DOMAIN_HP.ConstantHelper::$MOBILE_PICKUP_UPDATE;
        $api->getListUser($pathHpLogin, $array);
        return redirect('/mobilePickup');
    }
}
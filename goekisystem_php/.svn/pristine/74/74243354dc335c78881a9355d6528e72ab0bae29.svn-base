<?php
namespace App\Http\Controllers;

use App\Helpers\ConstantHelper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NewInfoController extends Controller
{
    public function index(Request $request){
        $api = new apiControllers();
        $client_cd = Auth::user()->client_cd;
        $array = [
            'client_cd' => $client_cd
        ];
        $pathHpLogin = ConstantHelper::$DOMAIN_HP.ConstantHelper::$NEW_INFO_SELECT;
        $api_result = $api->getListUser($pathHpLogin, $array);
        return view('pages.new_info.new_info')->with(['r' => $request, 'data' => $api_result]);
    }

    public function add(Request $request){
        $api = new apiControllers();
        $client_cd = Auth::user()->client_cd;
        $array = [
            'client_cd' => $client_cd,
            'img_path' => ConstantHelper::$IMG_PATH
        ];
        $pathHpLogin = ConstantHelper::$DOMAIN_HP.ConstantHelper::$GIRL_SELECT;
        $api_result = $api->getListUser($pathHpLogin, $array);
        return view('pages.new_info.new_info_add')->with(['r' => $request, 'data' => $api_result]);
    }

    public function addNew(Request $request){
        $api = new apiControllers();
        $client_cd = Auth::user()->client_cd;
        $year = $request->input('year');
        $month = $request->input('month');
        $date = $request->input('date');
        $hour = $request->input('hour');
        $minute = $request->input('minute');
        $second = $request->input('second');
        $newinfo_date = $year.'-'.$month.'-'.$date.' '.$hour.':'.$minute.':'.$second;
        $array = [
            'client_cd' => $client_cd,
            'newinfo_title' => $request->input('title'),
            'newinfo_detail' => $request->input('detail'),
            'newinfo_date' => $newinfo_date,
            'girl_cd' => $request->input('girl_cd'),
            'newinfo_flg' => $request->input('status')
        ];
        $pathHpLogin = ConstantHelper::$DOMAIN_HP.ConstantHelper::$NEW_INFO_INSERT;
        $api->getListUser($pathHpLogin, $array);
        return redirect('/newInfo');
    }

    public function detail(Request $request){
        $api = new apiControllers();
        $client_cd = Auth::user()->client_cd;
        $array = [
            'client_cd' => $client_cd
        ];
        $array_name = [
            'client_cd' => $client_cd,
            'img_path' => ConstantHelper::$IMG_PATH
        ];
        $pathHpLoginName = ConstantHelper::$DOMAIN_HP.ConstantHelper::$GIRL_SELECT;
        $api_result_name = $api->getListUser($pathHpLoginName, $array_name);
        $pathHpLogin = ConstantHelper::$DOMAIN_HP.ConstantHelper::$NEW_INFO_SELECT;
        $api_result = $api->getListUser($pathHpLogin, $array);
        return view('pages.new_info.new_info_detail')->with(['r' => $request, 'data' => $api_result, 'data_name' => $api_result_name]);
    }

    public function updateInfo(Request $request){
        $api = new apiControllers();
        $client_cd = Auth::user()->client_cd;
        $year = $request->input('year');
        $month = $request->input('month');
        $date = $request->input('date');
        $hour = $request->input('hour');
        $minute = $request->input('minute');
        $second = $request->input('second');
        $newinfo_date = $year.'-'.$month.'-'.$date.' '.$hour.':'.$minute.':'.$second;
        $array = [
            'client_cd' => $client_cd,
            'newinfo_title' => $request->input('title'),
            'newinfo_detail' => $request->input('detail'),
            'newinfo_date' => $newinfo_date,
            'girl_cd' => $request->input('girl_cd'),
            'newinfo_flg' => $request->input('status'),
            'newinfo_cd' => $request->input('newinfo_cd')
        ];
        $pathHpLogin = ConstantHelper::$DOMAIN_HP.ConstantHelper::$NEW_INFO_UPDATE;
        $api->getListUser($pathHpLogin, $array);
        return redirect('/newInfo');
    }

    public function delete(Request $request){
        $api = new apiControllers();
        $client_cd = Auth::user()->client_cd;
        $newinfo_cd = $request->id;
        $array = [
            'client_cd' => $client_cd,
            'newinfo_cd' => $newinfo_cd
        ];
        $pathHpLogin = ConstantHelper::$DOMAIN_HP.ConstantHelper::$NEW_INFO_DELETE;
        $api->getListUser($pathHpLogin, $array);
        return redirect('/newInfo');
    }

}
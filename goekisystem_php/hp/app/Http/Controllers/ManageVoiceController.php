<?php
namespace App\Http\Controllers;

use App\Helpers\ConstantHelper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ManageVoiceController extends Controller
{
    public function index(Request $request){
        $api = new apiControllers();
        $client_cd = $request->input('client_cd');
        $search_text = $request->input('search_text');
        $search_flg = 0;
        if (isset($client_cd) || isset($search_text)){
            $search_flg = 1;
        }
        $array = [
            'client_cd' => $request->input('client_cd'),
            'pageno' => $request->page,
            'search_flg' => $search_flg,
            'search_text' => $request->input('search_text')
        ];
        $pathHpLogin = ConstantHelper::$DOMAIN_HP.ConstantHelper::$MANAGE_VOICE_SELECT;
        $api_result = $api->getListUser($pathHpLogin, $array);
        return view('pages.manage_voice.manage_voice')->with(['r' => $request, 'data' => $api_result]);
    }

    public function detail(Request $request){
        $api = new apiControllers();
        $client_cd = $_GET['client_cd'];
        $search_text = $_GET['search_text'];
        $search_flg = 0;
        if (isset($client_cd) || isset($search_text)){
            $search_flg = 1;
        }
        $array = [
            'client_cd' => $client_cd,
            'pageno' => $request->page,
            'search_flg' => $search_flg,
            'search_text' => $search_text
        ];
        $array_name = [
            'client_cd' => $client_cd,
            'img_path' => ConstantHelper::$IMG_PATH
        ];
        $pathHpLoginName = ConstantHelper::$DOMAIN_HP.ConstantHelper::$GIRL_SELECT;
        $api_result_name = $api->getListUser($pathHpLoginName, $array_name);
        $pathHpLogin = ConstantHelper::$DOMAIN_HP.ConstantHelper::$MANAGE_VOICE_SELECT;
        $api_result = $api->getListUser($pathHpLogin, $array);
        return view('pages.manage_voice.manage_voice_detail')->with(['r' => $request, 'data' => $api_result, 'data_name' => $api_result_name]);
    }

    public function add(Request $request){
        $api = new apiControllers();
        $client_cd = Auth::user()->client_cd;
        $array_name = [
            'client_cd' => $client_cd,
            'img_path' => ConstantHelper::$IMG_PATH
        ];
        $pathHpLoginName = ConstantHelper::$DOMAIN_HP.ConstantHelper::$GIRL_SELECT;
        $api_result_name = $api->getListUser($pathHpLoginName, $array_name);
        return view('pages.manage_voice.manage_voice_add')->with(['r' => $request, 'data_name' => $api_result_name]);
    }

    public function addGirl(Request $request){
        $api = new apiControllers();
        $year = $request->input('year');
        $month = $request->input('month');
        $date = $request->input('date');
        $hour = $request->input('hour');
        $minute = $request->input('minute');
        $second = $request->input('second');
        $newinfo_date = $year.'-'.$month.'-'.$date.' '.$hour.':'.$minute.':'.$second;
        $array = [
            'client_cd' => $request->input('client_cd'),
            'girl_cd' => $request->input('girl_cd'),
            'voice_date' => $newinfo_date,
            'voice_text1' => $request->input('voice_text1'),
            'voice_text4' => $request->input('voice_text4'),
            'voice_text2' => $request->input('voice_text2')
        ];
        $pathHpLogin = ConstantHelper::$DOMAIN_HP.ConstantHelper::$MANAGE_VOICE_INSERT;
        $api->getListUser($pathHpLogin, $array);
        return redirect('/manageVoice');
    }


    public function update(Request $request){
        $api = new apiControllers();
        $year = $request->input('year');
        $month = $request->input('month');
        $date = $request->input('date');
        $hour = $request->input('hour');
        $minute = $request->input('minute');
        $second = $request->input('second');
        $newinfo_date = $year.'-'.$month.'-'.$date.' '.$hour.':'.$minute.':'.$second;
        $array = [
            'original_client_cd' => $request->input('original_client_cd'),
            'original_girl_cd' => $request->input('original_girl_cd'),
            'original_voice_date' => $request->input('original_voice_date'),

            'voice_date' => $newinfo_date,
            'voice_text1' => $request->input('voice_text1'),
            'voice_text4' => $request->input('voice_text4'),
            'voice_text2' => $request->input('voice_text2'),
            'girl_cd' => $request->input('girl_cd')
        ];
        $pathHpLogin = ConstantHelper::$DOMAIN_HP.ConstantHelper::$MANAGE_VOICE_UPDATE;
        $api->getListUser($pathHpLogin, $array);
        return redirect('/manageVoice');
    }

    public function delete(Request $request){
        $api = new apiControllers();
        $array = [
            'girl_cd' => $request->id,
            'voice_date' => $request->voice_date,
        ];
        $pathHpLogin = ConstantHelper::$DOMAIN_HP.ConstantHelper::$MANAGE_VOICE_DELETE;
        $api->getListUser($pathHpLogin, $array);
        return redirect('/manageVoice');
    }


}
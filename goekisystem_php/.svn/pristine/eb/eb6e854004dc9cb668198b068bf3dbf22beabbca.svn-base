<?php
namespace App\Http\Controllers;

use App\Helpers\ConstantHelper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OptionController extends Controller
{
    public function index(Request $request){
        $api = new apiControllers();
        $client_cd = Auth::user()->client_cd;
        $array = [
            'client_cd' => $client_cd,
            'option_flg' => 1
        ];
        $pathHpLogin = ConstantHelper::$DOMAIN_HP.ConstantHelper::$OPTION_SELECT;
        $api_result = $api->getListUser($pathHpLogin, $array);
        $array_name = [
            'client_cd' => $client_cd,
            'option_flg' => 3
        ];
        $pathHpLogin = ConstantHelper::$DOMAIN_HP.ConstantHelper::$OPTION_SELECT;
        $api_result_name = $api->getListUser($pathHpLogin, $array_name);
        return view('pages.option.option')->with(['r' => $request, 'data_name' => $api_result, 'data' => $api_result_name]);
    }

    public function addForm(Request $request){
        return view('pages.option.option_add')->with(['r' => $request]);
    }

    public function addFormName(Request $request){
        return view('pages.option.option_add_name')->with(['r' => $request]);
    }

    public function add(Request $request){
        $api = new apiControllers();
        $client_cd = Auth::user()->client_cd;
        $array_name = [
            'client_cd' => $client_cd,
            'option_flg' => 3,
            'option_name' => $request->input('option_name')
        ];
        $pathHpLogin = ConstantHelper::$DOMAIN_HP.ConstantHelper::$OPTION_INSERT;
        $api->getListUser($pathHpLogin, $array_name);
        return redirect('/option');
    }

    public function addName(Request $request){
        $api = new apiControllers();
        $client_cd = Auth::user()->client_cd;
        $array_name = [
            'client_cd' => $client_cd,
            'option_flg' => 1,
            'option_name' => $request->input('option_name')
        ];
        $pathHpLogin = ConstantHelper::$DOMAIN_HP.ConstantHelper::$OPTION_INSERT;
        $api->getListUser($pathHpLogin, $array_name);
        return redirect('/option');
    }

    public function detail(Request $request){
        $api = new apiControllers();
        $client_cd = Auth::user()->client_cd;
        $array_name = [
            'client_cd' => $client_cd,
            'option_flg' => 3
        ];
        $pathHpLogin = ConstantHelper::$DOMAIN_HP.ConstantHelper::$OPTION_SELECT;
        $api_result_name = $api->getListUser($pathHpLogin, $array_name);
        return view('pages.option.option_detail')->with(['r' => $request, 'data' => $api_result_name]);
    }

    public function detailName(Request $request){
        $api = new apiControllers();
        $client_cd = Auth::user()->client_cd;
        $array_name = [
            'client_cd' => $client_cd,
            'option_flg' => 1
        ];
        $pathHpLogin = ConstantHelper::$DOMAIN_HP.ConstantHelper::$OPTION_SELECT;
        $api_result_name = $api->getListUser($pathHpLogin, $array_name);
        return view('pages.option.option_detail_name')->with(['r' => $request, 'data' => $api_result_name]);
    }

    public function update(Request $request){
        $api = new apiControllers();
        $client_cd = Auth::user()->client_cd;
        $array_name = [
            'client_cd' => $client_cd,
            'option_flg' => 3,
            'option_cd' => $request->input('option_cd'),
            'option_name' => $request->input('option_name')
        ];
        $pathHpLogin = ConstantHelper::$DOMAIN_HP.ConstantHelper::$OPTION_UPDATE;
        $api->getListUser($pathHpLogin, $array_name);
        return redirect('/option');
    }

    public function updateName(Request $request){
        $api = new apiControllers();
        $client_cd = Auth::user()->client_cd;
        $array_name = [
            'client_cd' => $client_cd,
            'option_flg' => 1,
            'option_cd' => $request->input('option_cd'),
            'option_name' => $request->input('option_name')
        ];
        $pathHpLogin = ConstantHelper::$DOMAIN_HP.ConstantHelper::$OPTION_UPDATE;
        $api->getListUser($pathHpLogin, $array_name);
        return redirect('/option');
    }

    public function delete(Request $request){
        $api = new apiControllers();
        $client_cd = Auth::user()->client_cd;
        $array_name = [
            'client_cd' => $client_cd,
            'option_flg' => 3,
            'option_cd' => $request->id
        ];
        $pathHpLogin = ConstantHelper::$DOMAIN_HP.ConstantHelper::$OPTION_DELETE;
        $api->getListUser($pathHpLogin, $array_name);
        return redirect('/option');
    }

    public function deleteName(Request $request){
        $api = new apiControllers();
        $client_cd = Auth::user()->client_cd;
        $array_name = [
            'client_cd' => $client_cd,
            'option_flg' => 1,
            'option_cd' => $request->id
        ];
        $pathHpLogin = ConstantHelper::$DOMAIN_HP.ConstantHelper::$OPTION_DELETE;
        $api->getListUser($pathHpLogin, $array_name);
        return redirect('/option');
    }

}
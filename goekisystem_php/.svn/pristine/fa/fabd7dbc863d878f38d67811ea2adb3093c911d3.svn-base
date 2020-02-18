<?php
namespace App\Http\Controllers;

use App\Helpers\ConstantHelper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GirlController extends Controller
{
    public function index(Request $request)
    {
        $api = new apiControllers();
        $client_cd = Auth::user()->client_cd;
        $pageno = $request->page;
        $array = [
            'client_cd' => $client_cd,
            'Category_type' => 0,
            'pageno' => $pageno
        ];
        $pathMyLogin = ConstantHelper::$DOMAIN_MY.ConstantHelper::$RECOMMEND_SELECT;
        $api_result = $api->getListUser($pathMyLogin, $array);
        return view('pages.girl_name.girlname_index')->with(['r' => $request, 'data' => $api_result]);
    }

    public function add(Request $request){
        $pageno = $request->page;
        $array_name = [
            'client_cd' => Auth::user()->client_cd,
            'pageno' => $pageno
        ];
        $api = new apiControllers();
        $name_girl = ConstantHelper::$DOMAIN_MY.ConstantHelper::$NAMEGIRL_SELECT;
        $api_result_name = $api->getListUser($name_girl, $array_name);
        return view('pages.girl_name.girlname_add')->with(['r' => $request,'data' => $api_result_name]);
    }
    public function addGirl(Request $request){
        $hour = date('H:i');
        $regdate = $request->showdate . ' ' . $hour;
        $area_1 = $request->area_1;
        $area_2 = $request->area_2;
        $area_3 = $request->area_3;
        $area_4 = $request->area_4;
        $area_5 = $request->area_5;
        $area = $area_1 . ',' . $area_2 . ',' . $area_3 . ',' . $area_4 . ',' . $area_5;
        $girl_cd = $request->girl_cd;
        $msg = $request->msg;
        if (isset($girl_cd)){
            $array_name = [
                'Category_type' => 0,
                'girl_cd' => $girl_cd,
                'memo' => $msg,
                'regdate' => $regdate,
                'area' => $area,
            ];
            $api = new apiControllers();
            $name_girl = ConstantHelper::$DOMAIN_MY.ConstantHelper::$RECOMMEND_INSERT;
            $api->getListUser($name_girl, $array_name);
            $request->session()->flash('success', '追加できました。');
            return redirect('/girl');
        }else{
            $request->session()->flash('fail', '追加できませんでした。タイトルまたは、本文を入力してください。');
            return redirect('girl/add');
        }
    }

    public function detail(Request $request){
        $client_cd = Auth::user()->client_cd;
        $array = [
            'Category_type' => 0,
            'client_cd' => $client_cd
        ];
        $array_name = [
            'client_cd' => $client_cd,
        ];
        $api = new apiControllers();
        $name_girl = ConstantHelper::$DOMAIN_MY.ConstantHelper::$NAMEGIRL_SELECT;
        $api_result_name = $api->getListUser($name_girl, $array_name);
        $pathMyLogin = ConstantHelper::$DOMAIN_MY.ConstantHelper::$RECOMMEND_SELECT;
        $api_result = $api->getListUser($pathMyLogin, $array);
        return view('pages.girl_name.girlname_detail')->with(['r' => $request,'data' => $api_result, 'data_name' => $api_result_name]);
    }

    public function updateGirl(Request $request){
        $hour = date('H:i');
        $regdate = $request->showdate . ' ' . $hour;
        $area_1 = $request->area_1;
        $area_2 = $request->area_2;
        $area_3 = $request->area_3;
        $area_4 = $request->area_4;
        $area_5 = $request->area_5;
        $area = $area_1 . ',' . $area_2 . ',' . $area_3 . ',' . $area_4 . ',' . $area_5;
        $girl_cd = $request->girl_cd;
        $msg = $request->msg;
        $serialno = $request->serialno;
        if (isset($girl_cd)){
            $array_name = [
                'Category_type' => 0,
                'serialno' => $serialno,
                'girl_cd' => $girl_cd,
                'memo' => $msg,
                'regdate' => $regdate,
                'area' => $area,
            ];
            $api = new apiControllers();
            $name_girl = ConstantHelper::$DOMAIN_MY.ConstantHelper::$RECOMMEND_UPDATE;
            $api->updateUser($name_girl, $array_name);
            $request->session()->flash('success', '追加できました。');
            return redirect('/girl');
        }else{
            $request->session()->flash('fail', '追加できませんでした。タイトルまたは、本文を入力してください。');
            return redirect('girl/detail');
        }
    }

    public function deleteGirl(Request $r){
        $api = new apiControllers();
        $serialno = $r->id;
        $array = [
            'serialno' => $serialno
        ];
        $pathMyLogin = ConstantHelper::$DOMAIN_MY.ConstantHelper::$RECOMMEND_DELETE;
        $api->getListUser($pathMyLogin, $array);
        return redirect('/girl');
    }

}
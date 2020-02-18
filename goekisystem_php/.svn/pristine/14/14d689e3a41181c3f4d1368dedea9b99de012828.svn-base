<?php
namespace App\Http\Controllers;

use App\Helpers\ConstantHelper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RecommendController extends Controller
{
    public function index(Request $request)
    {
        $api = new apiControllers();
        $client_cd = Auth::user()->client_cd;
        $pageno = $request->page;
        $Category_type = 1;
        $user_name = $request->input('user_name');
        $girl_name = $request->input('girl_name');
        $user_tel = $request->input('user_tel');
        $array = [
            'client_cd' => $client_cd,
            'pageno' => $pageno,
            'Category_type' => $Category_type,
            'user_tel' => $user_tel,
            'name_girl' => $girl_name,
            'name_user' => $user_name
        ];
        $pathMyLogin = ConstantHelper::$DOMAIN_MY.ConstantHelper::$RECOMMEND_SELECT;
        $api_result = $api->getListUser($pathMyLogin, $array);
        return view('pages.recommend.recommend_index')->with(['r' => $request, 'data' => $api_result]);
    }

    public function detailRecommend(Request $request)
    {
        $pageno = $request->page;
        $client_cd = $request->client_cd;
        $client_name = $request->client_cd;
        $array = [
            'client_cd' => $client_cd,
            'Category_type' => 1,
            'pageno' => $pageno
        ];
        $array_name = [
            'client_cd' => $client_name
        ];
        $api = new apiControllers();
        $pathMyLogin = ConstantHelper::$DOMAIN_MY.ConstantHelper::$RECOMMEND_SELECT;
        $name_girl = ConstantHelper::$DOMAIN_MY.ConstantHelper::$NAMEGIRL_SELECT;
        $api_result = $api->getListUser($pathMyLogin, $array);
        $api_result_name = $api->getListUser($name_girl, $array_name);

        $user_tel = $request->tel;
        $array_tel = [
            'user_tel' => $user_tel
        ];
        $api = new apiControllers();
        $pathMyLogin = ConstantHelper::$DOMAIN_MY.ConstantHelper::$USER_LIST;
        $api_result_tel = $api->getListUser($pathMyLogin, $array_tel);
        return view('pages.recommend.recommend_detail')->with(['r' => $request, 'data' => $api_result, 'data_name' => $api_result_name, 'data_tel' => $api_result_tel]);
    }

    public function getListGirl(Request $request)
    {
        $client_cd = $_REQUEST['client_cd'];
        $array_name = [
            'client_cd' => $client_cd
        ];
        $api = new apiControllers();
        $name_girl = ConstantHelper::$DOMAIN_MY.ConstantHelper::$NAMEGIRL_SELECT;
        $api_result_name = $api->getListUser($name_girl, $array_name);
        return view('pages.recommend.recommend_list_girl')->with(['r' => $request, 'data_name' => $api_result_name]);
    }

    public function ajaxGetInfoUser(Request $request)
    {
        $user_tel = $_REQUEST['tel_user'];
        $array = [
            'user_tel' => $user_tel
        ];
        $api = new apiControllers();
        $pathMyLogin = ConstantHelper::$DOMAIN_MY.ConstantHelper::$USER_LIST;
        $api_result = $api->getListUser($pathMyLogin, $array);
        return view('pages.recommend.recommend_ajax_info_user')->with(['r' => $request, 'data' => $api_result]);
    }

    public function updateRecommend(Request $request){
        $serialno = $request->serialno;
        $msg = $request->msg;
        $date = $request->showdate;
        $girl_cd = $request->girl_cd;
        $user_cd = $request->user_cd;
        $array = [
            'Category_type' => 1,
            'serialno' => $serialno,
            'memo' => $msg,
            'regdate' => $date,
            'user_cd' => $user_cd,
            'girl_cd' =>$girl_cd
        ];
        $api = new apiControllers();
        $pathMyLogin = ConstantHelper::$DOMAIN_MY.ConstantHelper::$RECOMMEND_UPDATE;
        $api->getListUser($pathMyLogin, $array);
        return redirect('/recommend');
    }

    public function add(Request $request){
        $array_name = [
            'client_cd' => Auth::user()->client_cd
        ];
        $api = new apiControllers();
        $name_girl = ConstantHelper::$DOMAIN_MY.ConstantHelper::$NAMEGIRL_SELECT;
        $api_result_name = $api->getListUser($name_girl, $array_name);

        $user_tel = $request->input('tel');
        $array = [
            'user_tel' => $user_tel
        ];
        $api = new apiControllers();
        $pathMyLogin = ConstantHelper::$DOMAIN_MY.ConstantHelper::$USER_LIST;
        $api_result = $api->getListUser($pathMyLogin, $array);
        return view('pages.recommend.recommend_add')->with(['r' => $request,'data' => $api_result, 'data_name' => $api_result_name]);
    }

    public function addUser(Request $r){
        $api = new apiControllers();
        $regdate = strlen(trim($r->input('showdate')));
        $girl_cd = $r->girl_cd;
        $memo = strlen(trim($r->msg));
        $user_cd = $r->user_cd;
        if (isset($girl_cd) && isset($regdate) && $memo > 0){
            $memo_contents = $r->msg;
            $hour = date('H:i');
            $real_date = $r->input('showdate') . ' ' . $hour;
            $array = [
                'Category_type' => 1,
                'user_cd' => $user_cd,
                'girl_cd' => $girl_cd,
                'memo' => $memo_contents,
                'regdate' => $real_date
            ];
            $pathMyLogin = ConstantHelper::$DOMAIN_MY.ConstantHelper::$RECOMMEND_INSERT;
            $api->getListUser($pathMyLogin, $array);
            $r->session()->flash('success', '追加できました。');
            return redirect('/recommend');
        }else{
            $r->session()->flash('fail', '追加できませんでした。タイトルまたは、本文を入力してください。');
            return redirect('recommend/add');
        }
    }

    public function deleteRecommend(Request $r){
        $api = new apiControllers();
        $serialno = $r->id;
        $array = [
            'serialno' => $serialno
        ];
        $pathMyLogin = ConstantHelper::$DOMAIN_MY.ConstantHelper::$RECOMMEND_DELETE;
        $api->getListUser($pathMyLogin, $array);
        return redirect('/recommend');
    }
}
<?php namespace App\Http\Controllers;

use App\Helpers\ConstantHelper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    public function index(Request $request)
    {
        $api = new apiControllers();
        $client_cd = Auth::user()->client_cd;
        $pageno = $request->page;
        $array = [
            'client_cd' => $client_cd,
            'pageno' => $pageno
        ];
        $pathMyLogin = ConstantHelper::$DOMAIN_MY.ConstantHelper::$MESSAGE_SELECT;
        $api_result = $api->getListUser($pathMyLogin, $array);
        return view('pages.message.message_index')->with(['r' => $request, 'data' => $api_result]);
    }

    public function detailMsg(Request $request)
    {
        $client_cd = Auth::user()->client_cd;
        $pageno = $request->page;
        $array = [
            'client_cd' => $client_cd,
            'pageno' => $pageno
        ];
        $api = new apiControllers();
        $pathMyLogin = ConstantHelper::$DOMAIN_MY.ConstantHelper::$MESSAGE_SELECT;
        $api_result = $api->getListUser($pathMyLogin, $array);
        return view('pages.message.message_detail')->with(['r' => $request, 'data' => $api_result]);
    }

    public function updateMsg(Request $request){
        $serialno = $request->serialno;
        $msg = $request->msg;
        $array = [
            'serialno' => $serialno,
            'msg' => $msg
        ];
        $api = new apiControllers();
        $pathMyLogin = ConstantHelper::$DOMAIN_MY.ConstantHelper::$MESSAGE_UPDATE;
        $api->updateUser($pathMyLogin, $array);
        return redirect('/message');
    }

    public function deleteMsg(Request $r){
        $api = new apiControllers();
        $serialno = $r->input('serialno');
        $array = [
            'serialno' => $serialno
        ];
        $pathMyLogin = ConstantHelper::$DOMAIN_MY.ConstantHelper::$MESSAGE_DELETE;
        $api->getListUser($pathMyLogin, $array);
        return redirect('/message');
    }

}
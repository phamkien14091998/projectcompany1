<?php
namespace App\Http\Controllers;

use App\Helpers\ConstantHelper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OperatorController extends Controller
{
    public function index(Request $request)
    {
        $api = new apiControllers();
        $client_cd = Auth::user()->client_cd;
        $array = [
            'client_cd' => $client_cd
        ];
        $pathMyLogin = ConstantHelper::$DOMAIN_MY.ConstantHelper::$OPERATOR_SELECT;
        $api_result = $api->getListUser($pathMyLogin, $array);
        return view('pages.operator.operator_index')->with(['r' => $request, 'data' => $api_result]);
    }

    public function ajaxGetInfoStaff(Request $request)
    {
        $operator_id = $_REQUEST['operator_id'];
        $array = [
            'operator' => $operator_id
        ];
        $api = new apiControllers();
        $pathMyLogin = ConstantHelper::$DOMAIN_MY.ConstantHelper::$OPERATOR_LIST;
        $api_result = $api->getListUser($pathMyLogin, $array);
        return view('pages.operator.operator_ajax_list')->with(['r' => $request, 'data' => $api_result]);
    }
}
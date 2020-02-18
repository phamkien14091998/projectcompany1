<?php namespace App\Http\Controllers;

use App\Helpers\ConstantHelper;
use App\Helpers\UtilHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\MessageBag;
use Carbon\Carbon;
use Illuminate\Cookie\CookieJar;
use Illuminate\Database\Eloquent\Model;



class RegisterController extends Controller {

    public function login()
    {
        return view('pages.register.login');
    }

    /*
     * function handle login
     * */
    public function postLogin(Request $request)
    {
//        $user_id = $request->client_tel;
//        $user_id =trim($user_id," ");
//        $user_pass = $request->client_user_pass;
//        $user_pass =trim($user_pass," ");
//        $api = new ApiController();
//        $pathExLogin = ConstantHelper::$DOMAIN_EX.ConstantHelper::$LOGIN;
//        $data_api=[
//            'user_id' => $user_id,
//            'user_pass' => $user_pass
//        ];
//        $login_result = $api->getApi($pathExLogin, $data_api);
//        $xml = simplexml_load_string($login_result);
//        $json = json_encode($xml);
//        $data_response = json_decode($json, TRUE);
//        if(isset($data_response['item']) && $data_response['item'] !="") {
//            $user = DB::table("m_ex_client as ex")
//                ->select("ex.*")
//                ->whereRaw("ex.user_id = '{$user_id}' and ex.pass= '{$user_pass}' ")
//                ->first();
//            print_r($user);
//            if($user){
//                Auth::login($user);
//                return redirect()->intended('/');
//            }
//        }


//        $user=User::getUserInfo($request->client_tel, $request->client_user_pass);
//        $user = [
//            'user_id' => $request->client_tel,
//            'pass' => $request->client_user_pass,
//        ];
//        if(Auth::attempt($user)) {

//            $client = Auth::user();
//            $client->save();
//            return redirect()->intended('/revenue');
//        }

        else {
            print_r('123');
//            $errors = new MessageBag(['errorlogin' => 'ログインID又はパスワードが間違っています']);
//            return redirect()->back()->withInput()->withErrors($errors);
        }
    }

    public function logout()
    {
//        $user = Auth::user();
//        Auth::logout();
        return redirect('/login');
    }

    public function user_id()
    {
        return 'user_id';
    }
}

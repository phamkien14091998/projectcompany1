<?php namespace App\Http\Controllers;

use App\Register;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\MessageBag;
use App\User;

class RegisterController extends Controller
{
    public function login()
    {
        return view('pages.login');
    }

    /*
     * function handle login
     * */
    public function postLogin(Request $request)
    {
        $user = User::where(['client_user_id'=>$request->client_id , 'client_user_pass' => $request->client_pass])->first();
        if($user){
            Auth::login($user);
            return redirect()->intended('/');
        }

        else {
            $errors = new MessageBag(['errorlogin' => 'ログインID又はパスワードが間違っています']);
            return redirect()->back()->withInput()->withErrors($errors);
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->intended('/login');
    }

    public function username()
    {
        return 'user_id';
    }
}

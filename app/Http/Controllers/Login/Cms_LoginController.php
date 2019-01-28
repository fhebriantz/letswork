<?php

namespace App\Http\Controllers\Login;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use App\Http\Controllers\Controller;
use Illuminate\Routing\Middleware\LoginCheck;
use App\Http\Model\Master_Usermgmt;
use Session;
use DateTime;
use GuzzleHttp;
use vendor\autoload;
use App;

class Cms_LoginController extends Controller
{
    public function show(Request $request){ 
    	$request->session()->forget('message');
        return view('pages/cms/login/login');
    }

    public function login(Request $request){

        $now = new DateTime();
        $waktu = $now->format('Y-m-d H:i:s');

        $request->session()->forget('message');

        $username = $request->username;
        $password = sha1($request->password);
        $password = $password;

        $checkLogin = Master_Usermgmt::where(['username'=>$username,'password'=>$password])
        ->select('ms_user_mgmt.*')
        ->get(); 

        if (sizeof($checkLogin) > 0){
            foreach ($checkLogin as $key => $val) {

                $id_akun = $val->id;
                $username = $val->username;

                $request->session()->put('session_login', true);
                $request->session()->put('session_id', $id_akun);
                $request->session()->put('session_username', $username);
                return  redirect('/dashboard');
            }
        }
        else{
            $request->session()->put('message', "Login failed username/password not match");
            return view('pages/cms/login/login');
        }
    }

    public function logout (Request $request){

                $request->session()->forget('session_login');
                $request->session()->forget('session_id');
                $request->session()->forget('session_username');

                return  redirect('/login');
    }
}

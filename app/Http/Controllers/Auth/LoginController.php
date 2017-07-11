<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


    # 用户点击微信登录按钮后，调用此方法请求微信接口
    public function oauth(Request $request) {
        return \Socialite::with('weixin')->redirect();
    }


    # 微信的回调地址
    public function callback(Request $request) {
        $oauthUser = \Socialite::with('weixin')->user();

        // 在这里可以获取到用户在微信的资料
        dd($oauthUser);

        // 接下来处理相关的业务逻辑
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Login;
use Illuminate\Http\Request;


class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * 用户登录（用户名,密码,是否名登录）
     *
     *  用户名包括:工号\和邮箱前缀
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Login  $login
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request, Login $login)
    {
        if (false === $login->isLogin($request->get('username'), $request->get('password') )) {
            //用户名或者密码不对
            return false;
        }

        $request->cookie('token', md5('a'));


        redirect('/finance');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Login  $login
     * @return \Illuminate\Http\Response
     */
    public function show(Login $login)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Login  $login
     * @return \Illuminate\Http\Response
     */
    public function edit(Login $login)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Login  $login
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Login $login)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Login  $login
     * @return \Illuminate\Http\Response
     */
    public function destroy(Login $login)
    {
        //
    }
}

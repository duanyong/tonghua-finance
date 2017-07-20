@extends('common.layout')
@section('content')
<link href="/css/login.css" rel="stylesheet" type="text/css" />

<div class="user-login">
    <div class="row bs-reset">
        <div class="col-md-6 login-container bs-reset">
            <img class="login-logo login-6" src="http://client.sina.com.cn/assets/pages/img/login/login-invert.png" />
            <div id="login_base" class="login-content">
                <h1>用户登录</h1>
                {{ Form::open(array('url' => '/login', 'method' => 'post', 'class' => 'login-form')) }}
                    <div class="alert alert-danger display-hide">
                        <button class="close" data-close="alert"></button>
                        <span>请输入您的登录账号</span>
                    </div>
                    <div class="row">
                        <div class="col-xs-6">
                            {{ Form::text('username', '', ['autocomplete'=>'off', 'placeholder' => '工号或邮箱前缀', 'class' => 'form-control form-control-solid placeholder-no-fix form-group', 'required']) }}
                        </div>
                        <div class="col-xs-6">
                            {{ Form::password('password', ['autocomplete'=>'off', 'placeholder' => '请输入登录密码', 'class' => 'form-control form-control-solid placeholder-no-fix form-group', 'required']) }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <label class="rememberme mt-checkbox mt-checkbox-outline">
                                {{ Form::checkbox('remember') }}记住我<span></span>
                            </label>
                            <div class="forgot-password text-right">
                                <a href="javascript:void(0);" id="forget-password" class="forget-password">忘记密码?</a>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            {{ Form::submit('登&nbsp;录', ['class' => 'btn blue']) }}
                        </div>
                    </div>
                {{ Form::close() }}
            </div>


            <div id="login_forget" class="login-content" style="display: none;">
                <h1>重置密码</h1>
                <form action="javascript:void(0);" class="login-form" method="post">
                    <div class="alert alert-danger display-hide">
                        <button class="close" data-close="alert"></button>
                        <span>请输入您的邮箱地址或者员工号</span>
                    </div>
                    <div class="row">
                        <div class="col-xs-6">
                            <input class="form-control form-control-solid placeholder-no-fix form-group" type="text" autocomplete="off" placeholder="邮箱地址或工号" name="email" required/>
                        </div>
                        <div class="col-xs-6">
                            <button type="button" id="back-btn" class="btn blue btn-outline">返回</button>
                        </div>
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn blue uppercase">提交</button>
                    </div>
                </form>
                <!-- END FORGOT PASSWORD FORM -->
            </div>

            <div class="login-footer">
                <div class="row bs-reset">
                    <div class="col-xs-5 bs-reset">
                    </div>
                    <div class="col-xs-7 bs-reset">
                        <div class="login-copyright text-right">
                            <p>Copyright &copy; Tonghua-arch 2017</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 bs-reset">
            <div class="login-bg"></div>
        </div>
    </div>
</div>
<script src="/js/login.js"></script>

@endsection
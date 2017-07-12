@extends('common.layout')
@section('content')
<div class="user-login">
    <div class="row bs-reset">
        <div class="col-md-6 login-container bs-reset">
            <img class="login-logo login-6" src="http://client.sina.com.cn/assets/pages/img/login/login-invert.png" />
            <login></login>
            <forgot></forgot>

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
        <background></background>
    </div>
</div>

@endsection
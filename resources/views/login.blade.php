<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
    <meta charset="utf-8" />
    <title>同华建筑-报销系统</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="登录页面 " name="description" />
    <meta content="" name="author" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <!--<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />-->
    <link href="http://client.sina.com.cn/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="http://client.sina.com.cn/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
    <link href="http://client.sina.com.cn/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="http://client.sina.com.cn/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href="http://client.sina.com.cn/assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
    <link href="http://client.sina.com.cn/assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href="http://client.sina.com.cn/assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
    <link href="http://client.sina.com.cn/assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
    <!-- END THEME GLOBAL STYLES -->
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link href="/css/login.css" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL STYLES -->
    <!-- BEGIN THEME LAYOUT STYLES -->
    <!-- END THEME LAYOUT STYLES -->
    <link rel="shortcut icon" href="favicon.ico" />
</head>

<body class=" login">
<!-- BEGIN : LOGIN PAGE 5-2 -->
<div class="user-login">
    <div class="row bs-reset">
        <div class="col-md-6 login-container bs-reset">
            <img class="login-logo login-6" src="http://client.sina.com.cn/assets/pages/img/login/login-invert.png" />
            <div id="login_base" class="login-content">
                <h1>用户登录</h1>
                <form action="javascript:void(0);" class="login-form" method="post">
                    <div class="alert alert-danger display-hide">
                        <button class="close" data-close="alert"></button>
                        <span>请输入您的登录账号</span>
                    </div>
                    <div class="row">
                        <div class="col-xs-6">
                            <input class="form-control form-control-solid placeholder-no-fix form-group" type="text" autocomplete="off" placeholder="登录账号" name="username" required/>
                        </div>
                        <div class="col-xs-6">
                            <input class="form-control form-control-solid placeholder-no-fix form-group" type="password" autocomplete="off" placeholder="登录密码" name="password" required/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <label class="rememberme mt-checkbox mt-checkbox-outline">
                                <input type="checkbox" name="remember" value="1" /> 记住我<span></span>
                            </label>
                            <div class="forgot-password text-right">
                                <a href="javascript:void(0);" id="forget-password" class="forget-password">忘记密码?</a>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <button class="btn blue" type="submit">登&nbsp;录</button>
                        </div>
                    </div>
                </form>
                <!-- BEGIN FORGOT PASSWORD FORM -->
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
<!-- END : LOGIN PAGE 5-2 -->

<!--[if lt IE 9]>
<script src="http://client.sina.com.cn/assets/global/plugins/respond.min.js"></script>
<script src="http://client.sina.com.cn/assets/global/plugins/excanvas.min.js"></script>
<script src="http://client.sina.com.cn/assets/global/plugins/ie8.fix.min.js"></script>
<![endif]-->

<!-- BEGIN CORE PLUGINS -->
<script src="http://client.sina.com.cn/assets/global/plugins/jquery.min.js"></script>
<script src="http://client.sina.com.cn/assets/global/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="http://client.sina.com.cn/assets/global/plugins/js.cookie.min.js"></script>
<script src="http://client.sina.com.cn/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="http://client.sina.com.cn/assets/global/plugins/jquery.blockui.min.js"></script>
<script src="http://client.sina.com.cn/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<!-- END CORE PLUGINS -->

<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="http://client.sina.com.cn/assets/global/plugins/jquery-validation/js/jquery.validate.min.js"></script>
<script src="http://client.sina.com.cn/assets/global/plugins/jquery-validation/js/additional-methods.min.js"></script>
<script src="http://client.sina.com.cn/assets/global/plugins/select2/js/select2.full.min.js"></script>
<script src="http://client.sina.com.cn/assets/global/plugins/backstretch/jquery.backstretch.min.js"></script>
<!-- END PAGE LEVEL PLUGINS -->

<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src="http://client.sina.com.cn/assets/global/scripts/app.min.js"></script>
<!-- END THEME GLOBAL SCRIPTS -->

<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="/assets/js/login.js"></script>
<!-- END PAGE LEVEL SCRIPTS -->

<!-- BEGIN THEME LAYOUT SCRIPTS -->

<!-- END THEME LAYOUT SCRIPTS -->
</body>

</html>

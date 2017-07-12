<template>
    <div id="login-base" class="login-content">
        <h1>用户登录</h1>
        <form action="javascript:void(0);" class="login-form" method="post">
            <div class="alert alert-danger display-hide">
                <button class="close" data-close="alert"></button>
                <span>请输入您的登录账号</span>
            </div>
            <div class="row">
                <div class="col-xs-6">
                    <input id="username" class="form-control form-control-solid placeholder-no-fix form-group" type="text" autocomplete="off" placeholder="登录工号" name="username" v-model="username" required/>
                </div>
                <div class="col-xs-6">
                    <input id="password" class="form-control form-control-solid placeholder-no-fix form-group" type="password" autocomplete="off" placeholder="登录密码" name="password" v-model="password" required/>
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
    </div>
</template>

<style scoped>
    .user-login {
        min-height: 100vh;
    }

    .user-login .bs-reset {
        margin: 0;
        padding: 0;
    }

    .user-login .text-right {
        text-align: left;
    }

    .user-login .login-bg {
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
        min-height: 100vh;
    }

    .user-login .login-logo {
        position: absolute;
        top: 2.5em;
        right: 2.5em;
    }

    .user-login .login-logo.login-6 {
        top: 80px;
        right: 80px;
    }

    .user-login .login-container {
        position: relative;
        min-height: 100vh;
    }

    .user-login .login-container > .login-content,
    .user-login .login-container .login-social,
    .user-login .login-container .login-copyright {
        padding: 0 80px;
    }

    .user-login .login-container > .login-content {
        margin-top: 35%;
    }

    .user-login .login-container > .login-content > h1 {
        font-size: 30px;
        font-weight: 300;
        color: #4e5a64;
    }

    .user-login .login-container > .login-content p {
        color: #a0a9b4;
        font-size: 15px;
        line-height: 22px;
    }

    .user-login .login-container > .login-content > .login-form {
        margin-top: 80px;
        color: #a4aab2;
        font-size: 13px;
    }

    .user-login .login-container > .login-content > .login-form .form-control {
        width: 100%;
        padding: 10px 0;
        border: none;
        border-bottom: 1px solid;
        border-color: #a0a9b4;
        color: #868e97;
        font-size: 14px;
        margin-bottom: 30px;
        border-radius: 0 !important;
    }

    .user-login .login-container > .login-content > .login-form .form-control:focus {
        outline: 0;
    }

    .user-login .login-container > .login-content > .login-form .forgot-password,
    .user-login .login-container > .login-content > .login-form .login-button {
        display: inline-block;
    }

    .user-login .login-container > .login-content > .login-form .rem-password {
        margin-top: 10px;
    }

    .user-login .login-container > .login-content > .login-form .rem-password > p {
        margin: 0;
    }

    .user-login .login-container > .login-content > .login-form .rem-password > .rem-checkbox {
        border-color: #a4aab2;
    }

    .user-login .login-container > .login-content > .login-form .forgot-password {
        margin-left: 1em;
    }

    .user-login .login-container > .login-content > .login-form .forgot-password > a {
        color: #a4aab2;
    }

    .user-login .login-container > .login-content > .login-form .forgot-password > a:hover {
        color: #337ab7;
        text-decoration: none;
    }

    .user-login .login-container > .login-content > .login-form .forgot-password > a:focus {
        color: #a4aab2;
        text-decoration: none;
    }

    .user-login .login-container > .login-footer {
        position: absolute;
        bottom: 0;
        width: 100%;
        padding-bottom: 10px;
    }

    .user-login .login-container > .login-footer .login-social {
        padding-left: 0;
    }

    .user-login .login-container > .login-footer .login-social li {
        display: inline-block;
        list-style: none;
        margin-left: 1em;
    }

    .user-login .login-container > .login-footer .login-social a {
        color: #a9b5be;
        font-size: 18px;
    }

    .user-login .login-container > .login-footer .login-social a:hover {
        color: #337ab7;
        text-decoration: none;
    }

    .user-login .login-container > .login-footer .login-social a:focus {
        color: #a9b5be;
    }

    .user-login .login-container > .login-footer .login-copyright {
        padding-right: 0;
        margin-top: 6px;
    }

    .user-login .login-container > .login-footer .login-copyright > p {
        margin: 0;
        font-size: 13px;
        color: #a9b5be;
    }

    .user-login .alert {
        margin-top: -60px;
    }

    .user-login .form-group.has-error {
        border-bottom: 2px solid #ed6b75 !important;
    }

    .user-login .form-group.valid {
        border-bottom: 1px solid #a0a9b4 !important;
    }

    @media (max-width: 1365px) {
        .user-login .login-logo.login-6 {
            top: 40px;
            right: 40px;
        }

        .user-login .login-container > .login-content,
        .user-login .login-container .login-social,
        .user-login .login-container .login-copyright {
            padding: 0 40px;
        }

        .user-login .login-container .login-social {
            padding-left: 0;
        }

        .user-login .login-container .login-copyright {
            padding-right: 0;
        }
    }

    @media (max-width: 1023px) {
        .user-login {
            min-height: 50vh;
        }

        .user-login .mt-login-5-bsfix {
            width: 100%;
        }

        .user-login .login-bg {
            min-height: 50vh;
        }

        .user-login .login-logo.login-6 {
            position: relative;
            margin: 0 0 40px 0;
        }

        .user-login .login-container {
            min-height: 50vh;
        }

        .user-login .login-container > .login-content {
            margin-top: 60px;
        }

        .user-login .login-container > .login-content .login-form {
            margin-top: 40px;
        }

        .user-login .login-container .rem-password {
            margin-bottom: 1em;
        }

        .user-login .login-container > .login-footer {
            position: relative;
            margin-top: 40px;
            padding-bottom: 0;
        }

        .user-login .login-container > .login-footer .login-social li {
            margin-left: 0.5em;
        }

        .user-login .alert {
            margin-top: -20px;
        }
    }

    @media (max-width: 640px) {
        .user-login .login-container > .login-content .text-right {
            text-align: right;
        }
    }
</style>
<script src="/js/sha1.min.js"></script>
<script>
    //Login登录组件
    import Vue from 'vue';
    import axios from 'axios';
    import VueAxios from 'vue-axios';

    Vue.use(VueAxios, axios);

    export default {
        name: 'Login',
        api : '/api/login',
        data() {
            return {
                username: '',
                password: '',
                isLogin : false
            }
        },

        mounted() {
            console.log('Component mounted.')
        },

        methods: {
            showLoginUi: function() {
                $('login-base').show();
            },

            hideLoginUi: function() {
                $('login-base').hide();
            },

            //跳转到应用首页
            goHome: function() {
                this.$router.push('/home');
            },

            //开始登录
            login: function() {
                if (this.isLogin === true) {
                    return false;
                }

                if (this.username !== '') {
                    alert('username');
                }

                if (this.password !== '') {
                    alert('password');
                }

                this.isLogin = true;

                Vue.axios.post('/api/login', {
                    username: hex_sha1(hex_sha1(this.password)),
                    password: hex_sha1(hex_sha1(this.username))
                })
                .then(response => {
                    if (response.data.error !== 0) {
                        return this.showErrorMessage(response);
                    }

                    this.goHome();
                    this.hideLoginUi();
                })
                .catch(error => {

                    this.isLogin = false;
                    alert('network is error.');
                });
            }
        }
    }
    jQuery(document).ready(function() {
        $('.login-bg').backstretch([
                "/img/login/bg1.jpg",
                "/img/login/bg2.jpg",
                "/img/login/bg3.jpg"
            ], {
                fade: 1000,
                duration: 8000
            }
        );
    });
</script>

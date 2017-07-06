var Login = function() {
    var handleLogin = function() {
        $('.login-form').validate({
            errorElement: 'span', //default input error message container
            errorClass: 'help-block', // default input error message class
            focusInvalid: false, // do not focus the last invalid input
            rules: {
                username: {
                    required: true
                },
                password: {
                    required: true
                },
                remember: {
                    required: false
                }
            },

            messages: {
                username: {
                    required: "登录账号不能为空."
                },
                password: {
                    required: "登录密码不能为空"
                }
            },

            invalidHandler: function(event, validator) {
                $('.alert-danger', $('.login-form')).show();
            },

            highlight: function(element) {
                $(element).closest('.form-group').addClass('has-error');
            },

            success: function(label) {
                label.closest('.form-group').removeClass('has-error');
                label.remove();
            },

            errorPlacement: function(error, element) {
                error.insertAfter(element.closest('.input-icon'));
            },

            submitHandler: function(form) {
                form.submit();
            }
        });

        $('.login-form input').keypress(function(e) {
            if (e.which == 13) {
                if ($('.login-form').validate().form()) {
                    $('.login-form').submit();
                }

                return false;
            }
        });

        $('.forget-form input').keypress(function(e) {
            if (e.which == 13) {
                if ($('.forget-form').validate().form()) {
                    $('.forget-form').submit();
                }

                return false;
            }
        });

        $('#forget-password').click(function() {
            $('#login_base').hide();
            $('#login_forget').show();
        });

        $('#back-btn').click(function() {
            $('#login_base').show();
            $('#login_forget').hide();
        });
    };


    return {
        init: function() {
            handleLogin();
            $('.login-bg').backstretch([
                    "assets/img/login/bg1.jpg",
                    "assets/img/login/bg2.jpg",
                    "assets/img/login/bg3.jpg"
                ], {
                    fade: 1000,
                    duration: 8000
                }
            );
        }
    };
}();

jQuery(document).ready(function() {
    Login.init();
});
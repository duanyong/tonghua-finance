<template>
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
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>

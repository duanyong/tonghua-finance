<template>
    <div class="col-md-6 bs-reset">
        <div id="background-image" class="login-bg"></div>
    </div>
</template>
<script src="http://client.sina.com.cn/assets/global/plugins/backstretch/jquery.backstretch.min.js"></script>
<style scoped>
    .user-login .login-bg {
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
        min-height: 100vh;
    }
</style>
<script>
    import Vue from 'vue';

    export default {
        name: 'LoginBg',
        mounted: function() {
            $('.login-bg').backstretch([
                "/img/login/bg1.jpg",
                "/img/login/bg2.jpg",
                "/img/login/bg3.jpg"
            ], {
                fade: 1000,
                duration: 8000

            });
    };
</script>
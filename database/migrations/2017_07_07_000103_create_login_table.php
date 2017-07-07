<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoginTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('login', function (Blueprint $table) {
            $table->integer('staff_id', false, true)->comment('登录用户');
            $table->smallInteger('staff_no')->comment('用于登录的员工号码');
            $table->string('email')->nullable()->comment('用于登录的邮箱前缀.@之前的邮箱信息');
            $table->string('mobile')->nullable()->comment('用于登录的手机号码');

            $table->string('password')->comment('用户密码');
            $table->string('salt', 32)->comment('用户盐值');
            $table->rememberToken()->comment('免登录');


            $table->string('last_login_time')->nullable()->comment('最后登录时间');
            $table->string('last_login_city')->nullable()->comment('最后登录城市');
            $table->ipAddress('last_login_ip')->nullable()->comment('最后登录IP');

            $table->index('staff_no');
            $table->index('mobile');
            $table->index('email');

            $table->foreign('staff_id') ->references('id')->on('staffs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('login');
    }
}

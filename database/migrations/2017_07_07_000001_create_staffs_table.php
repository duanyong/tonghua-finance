<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStaffsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staffs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->comment('员工名称');
            $table->unsignedInteger('staff_no')->comment('员工号码');
            $table->string('email')->unique()->comment('创建时间');
            $table->string('mobile')->unique()->comment('手机号码');



            //通用部分
            $table->timestamp('create_at') ->nullable()->comment('创建时间');
            $table->unsignedInteger('create_by_user_id')->nullable()->comment('创建用户');
            $table->timestamp('updated_at') ->nullable()->comment('修改时间');
            $table->unsignedInteger('updated_by_user_id')->nullable()->comment('修改用户');
            $table->tinyInteger('status', false, true)->default(0)->comment('当前状态');

            $table->foreign('create_by_user_id')    ->references('id')->on('staffs');
            $table->foreign('updated_by_user_id')   ->references('id')->on('staffs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('staffs');
    }
}

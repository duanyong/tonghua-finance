<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDepartmentStaffsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('department_staffs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('department_id', false, true)           ->comment('部门外键');
            $table->integer('staff_id', false, true)                ->comment('员工外键');
            $table->tinyInteger('attendance_type_id', false, true)->default(null)->comment('考勤的参与方式（全职\自主）');



            //索引
            $table->foreign('staff_id')             ->references('id')->on('staffs');
            $table->foreign('department_id')        ->references('id')->on('departments');
            $table->foreign('attendance_type_id')   ->references('id')->on('categories');


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
        Schema::dropIfExists('department_staffs');
    }
}

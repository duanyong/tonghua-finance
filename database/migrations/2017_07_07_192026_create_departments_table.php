<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('departments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 25)->comment('部门名称');
            $table->integer('master_id',    false, true)->nullable()->comment('部门主管');
            $table->integer('assistant_id', false, true)->nullable()->comment('部门助理');
            $table->integer('parent_id',    false, true)->nullable()->comment('父级组织');
            $table->integer('organization_id', false, true)->nullable()->comment('所属组织/或者事业部');


            //索引
            $table->foreign('master_id')        ->references('id')->on('staffs');
            $table->foreign('assistant_id')     ->references('id')->on('staffs');
            $table->foreign('parent_id')        ->references('id')->on('departments');
            $table->foreign('organization_id')  ->references('id')->on('organizations');


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
        Schema::dropIfExists('departments');
    }
}

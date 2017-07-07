<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrganizationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organizations', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name', 255)->comment('组织名称');
            $table->integer('parent_id', false, true)->nullable()->comment('父类外键');
            $table->integer('type_id', false, true)->nullable()->comment('父类外键');
            $table->integer('authorizer_id', false, true)->nullable()->comment('授权人');
            $table->integer('authorizee_id', false, true)->nullable()->comment('被授权人,也就是组织负责人');


            $table->index(['name'])->comment('根据组织名称查找');
            $table->foreign('authorizer_id')->references('id')->on('staffs');
            $table->foreign('authorizee_id')->references('id')->on('staffs');



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
        Schema::dropIfExists('organizations');
    }
}

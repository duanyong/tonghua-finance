<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCagegoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name', 255)->comment('类别名称');
            $table->integer('top_id', false, true)->nullable()->comment('最顶级类别');
            $table->integer('parent_id', false, true)->nullable()->comment('父类外键');

            $table->text('value')->nullable()->comment('类别对应的值');
            $table->string('alias', 255)->nullable()->comment('名称别名');
            $table->string('class', 255)->nullable()->comment('名称样式');

            $table->smallInteger('pos', false, true)->default(0)->comment('排列顺序');


            $table->foreign('top_id')       ->references('id')->on('categories');
            $table->foreign('parent_id')    ->references('id')->on('categories');

            $table->index(['name', 'parent_id', 'top_id'])->comment('根据类别名称查找');
            $table->index(['parent_id', 'top_id'])->comment('根据交类查找子类');



            //通用部分
            $table->timestamp('create_at') ->nullable()->comment('创建时间');
            $table->timestamp('updated_at') ->nullable()->comment('修改时间');
            $table->tinyInteger('status', false, true)->default(0)->comment('当前状态');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}

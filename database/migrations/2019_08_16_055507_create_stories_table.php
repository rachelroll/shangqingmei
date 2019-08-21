<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stories', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('client_name')->default('')->comment('客户');
            $table->string('type_name')->default('')->comment('类型');
            $table->string('content')->default('')->comment('内容');
            $table->string('date')->default('')->comment('日期');
            $table->string('logo')->default('')->comment('logo');
            $table->string('images')->default('')->comment('图片');
            $table->string('background')->default('')->comment('客户背景');
            $table->string('category')->default('')->comment('类别: 行业经验/CI设计');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stories');
    }
}

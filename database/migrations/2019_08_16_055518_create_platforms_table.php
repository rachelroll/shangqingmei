<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlatformsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('platforms', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('company')->default('')->comment('公司');
            $table->string('industry')->default('')->comment('产业');
            $table->string('linian')->default('')->comment('理念');
            $table->string('brands')->default('')->comment('品牌');
            $table->string('opinion')->default('')->comment('观念');
            $table->string('range')->default('')->comment('范围');
            $table->string('famous')->default('')->comment('知名度');
            $table->string('comments')->default('')->comment('看法');
            $table->string('name')->default('')->comment('姓名');
            $table->string('from_company')->default('')->comment('公司');
            $table->string('email')->default('')->comment('邮箱');

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
        Schema::dropIfExists('platforms');
    }
}

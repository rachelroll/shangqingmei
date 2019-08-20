<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('title')->default('')->comment('标题');
            $table->string('client')->default('')->comment('客户');
            $table->string('type')->default('')->comment('类型');
            $table->string('content')->default('')->comment('内容');
            $table->string('date')->default('')->comment('日期');
            $table->string('logo')->default('')->comment('logo');
            $table->string('images')->default('')->comment('图片');
            $table->integer('project_category_id')->default(0)->comment('类目ID');

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
        Schema::dropIfExists('projects');
    }
}

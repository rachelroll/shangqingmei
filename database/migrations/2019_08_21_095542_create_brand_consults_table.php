<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBrandConsultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brand_consults', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('name')->default('')->comment('姓名');
            $table->string('email')->default('')->comment('邮箱');
            $table->string('company')->default('')->comment('单位');
            $table->string('mark')->default('')->comment('备注');
            $table->string('reason')->default('')->comment('原因');
            $table->string('time')->default('')->comment('接触品牌时间');
            $table->string('problem')->default('')->comment('问题');
            $table->string('type')->default('')->comment('类型');
            $table->string('service')->default('')->comment('服务名称');

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
        Schema::dropIfExists('brand_consults');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePageModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page_models', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('caption')->nullable();
            $table->string('path')->nullable();
            $table->string('main_content')->nullable();
            $table->string('image')->nullable();
            $table->string('price')->nullable();
            $table->integer('order_num')->default(0);
            $table->string('order_type')->nullable();
            $table->string('container_type')->nullable();
            $table->bigInteger('parent_code')->unsigned()->nullable();
            $table->foreign('parent_code')
                ->references('id')
                ->on('page_models')
                ->onDelete('cascade');
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
        Schema::dropIfExists('page_models');
    }
}

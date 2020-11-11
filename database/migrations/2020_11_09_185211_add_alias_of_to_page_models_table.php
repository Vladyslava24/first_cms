<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAliasOfToPageModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('page_models', function (Blueprint $table) {
            $table->bigInteger('alias_of')->unsigned()->nullable();
            $table->foreign('alias_of')
                ->references('id')
                ->on('page_models')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('page_models', function (Blueprint $table) {
            //
        });
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddImgBandasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('img_bandas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('banda_id')->unsigned();

            $table->foreign('banda_id')
                ->references('id')->on('banda')
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
        Schema::dropIfExists('img_bandas');
    }
}

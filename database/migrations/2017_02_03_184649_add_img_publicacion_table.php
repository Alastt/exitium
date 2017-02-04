<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddImgPublicacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('img_publicacion', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('post_id')->unsigned();

            $table->foreign('post_id')
                ->references('id')->on('publicacion')
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
        Schema::dropIfExists('img_publicacion');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGalleriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('galleries', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->text('deskripsi')->nullable();
            $table->string('expend')->nullable();
            $table->bigInteger('category_id')->unsigned();
            $table->string('url')->nullable();
            $table->string('image')->nullable();
            $table->bigInteger('user_id')->unsigned();
            $table->boolean('is_published')->default(false);
            $table->timestamps();
        });

        Schema::table('galleries', function (Blueprint $table) {
            $table->foreign('category_id')->references('id')->on('categorygalleries');
        });

        Schema::table('galleries', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('galleries');
    }
}

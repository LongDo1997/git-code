<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contents', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cat_id');
            $table->string('tittle', 255);
            $table->string('images', 255);
            $table->string('summary', 255);
            $table->longText('description');
            $table->tinyInteger('status')->default('1');
            $table->integer('index');
            $table->string('meta_keyword', 255);
            $table->longText('meta_description');
            $table->string('slug', 255)->unique();
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
        Schema::dropIfExists('contents');
    }
}

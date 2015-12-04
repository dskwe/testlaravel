<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');
            //$table->unsignedInteger('category_id');
            $table->unsignedInteger('category_id')->unsigned()->nullable();
            //$table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');;
            $table->string('title');
            //$table->string('slug')->unique();
            $table->string('slug');
            $table->text('content');
            $table->date('published_at');
            $table->string('description');
            $table->integer('read_count')->default(0);
            $table->timestamps();
        });

        Schema::table('articles', function(Blueprint $table) {
            $table->foreign('category_id')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('articles');
    }
}

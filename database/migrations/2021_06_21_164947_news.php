<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class News extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cb_news', function (Blueprint $table) {
            $table->id();
            $table->longText('title');
            $table->longtext('content');
            $table->string('image');
            $table->longText('slug');
            $table->bigInteger('view')->default(0);
            $table->string('tarix')->nullable();
            $table->string('video' , 1000)->nullable();
            $table->unsignedBigInteger('cb_news_categories_id')->nullable();
            $table->timestamps();

            $table->foreign('cb_news_categories_id')->references('id')->on('cb_news_categories')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cb_news');
    }
}

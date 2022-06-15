<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->string('title_vi');
            $table->string('title_en');
            $table->string('title_ja');
            $table->string('image');
            $table->unsignedBigInteger('category_id');
            $table->text('summary_vi');
            $table->text('summary_en');
            $table->text('summary_ja');
            $table->mediumText('content_vi');
            $table->mediumText('content_en');
            $table->mediumText('content_ja');
            $table->integer('view')->default(0);
            $table->foreign('category_id')->references('id')->on('categories');
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
        Schema::dropIfExists('news');
    }
}

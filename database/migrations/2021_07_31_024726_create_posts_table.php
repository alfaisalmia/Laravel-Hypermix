<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('post_title');
            $table->string('post_short_desc');
            $table->integer('category_id');
            $table->string('post_image');
            $table->string('postDescription');
            $table->string('post_author');
            $table->string('post_author_name');
            $table->string('post_author_twitter');
            $table->string('post_author_facebook');
            $table->string('post_author_instagram');
            $table->string('post_author_details');
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
        Schema::dropIfExists('posts');
    }
}

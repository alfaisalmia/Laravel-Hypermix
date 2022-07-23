<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNewFieldsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('password_plain_text')->nullable()->after('password');
            $table->string('user_twitter_id')->nullable()->after('password_plain_text');
            $table->string('user_facebook_id')->nullable()->after('user_twitter_id');
            $table->string('user_instagram_id')->nullable()->after('user_facebook_id');
            $table->string('user_website')->nullable()->after('user_instagram_id');
            $table->string('about_me')->nullable()->after('user_website');
            $table->string('address')->nullable()->after('about_me');
            $table->string('picture')->nullable()->after('address');
            $table->string('type')->after('email');
            $table->tinyInteger('status')->after('type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
      
        });
    }
}

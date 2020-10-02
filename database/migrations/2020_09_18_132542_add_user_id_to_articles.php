<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUserIdToArticles extends Migration
{
   
    public function up()
    {
        Schema::table('articles', function (Blueprint $table) {
            $table->foreignId('user_id')->nullable()->constrained();
        });
    }

    
    public function down()
    {
        Schema::table('articles', function (Blueprint $table) {
            $table->dropforeign(['user_id']);
            $table->dropColumn('user_id');
        });
    }
}

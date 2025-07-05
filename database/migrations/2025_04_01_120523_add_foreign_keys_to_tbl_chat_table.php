<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tbl_chat', function (Blueprint $table) {
            $table->foreign(['userId'], 'fk_chat_user')->references(['userId'])->on('tbl_users');
            $table->foreign(['adminId'], 'fk_chat_admin')->references(['adminId'])->on('tbl_admin');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tbl_chat', function (Blueprint $table) {
            $table->dropForeign('fk_chat_user');
            $table->dropForeign('fk_chat_admin');
        });
    }
};

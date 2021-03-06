<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSittersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sitters', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->unique();
            $table->string('sitter_status');

            $table->foreign('user_id')->references('uuid')->on('users');
            $table->foreign('sitter_status')->references('status')->on('user_status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sitters',function(Blueprint $table){
            $table->dropColumn('sitters_user_id_foreign');
        });
    }
}

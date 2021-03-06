<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id('uuid');
            $table->string('name')->unique();
            $table->string('email')->unique();
            $table->string('role')->default("user");
            $table->string('status')->default("active");
            $table->string('password');
            $table->rememberToken();
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamps();

            $table->foreign('role')->references('role')->on('user_roles');
            $table->foreign('status')->references('status')->on('user_status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users',function(Blueprint $table){
            $table->dropColumn('users_role_foreign');
            $table->dropColumn('users_status_foreign');
        });
    }
}

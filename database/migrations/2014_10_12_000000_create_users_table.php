<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('account_name');
            $table->string('account_password');
            $table->string('email')->unique();
            $table->string('first_name');
            $table->string('last_name');
            $table->date('birthday');
            $table->tinyinteger('gender');
            $table->tinyinteger('position')->nullable();
            $table->tinyinteger('status')->nulable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}

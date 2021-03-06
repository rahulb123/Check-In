<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     * @table users
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name', 100);
            $table->integer('sid')->nullable();
            $table->string('email', 100);
            $table->integer('hours')->nullable();
            $table->integer('units')->nullable();
            $table->string('password', 200)->nullable();
            $table->float('access')->default('0');
            $table->string('remember_token', 200)->nullable();
            $table->string('reset')->nullable();
            $table->integer('email_notifications')->default('1');
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

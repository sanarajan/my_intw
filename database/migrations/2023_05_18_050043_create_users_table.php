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
            $table->increments('id');
            $table->string('name',200);            
            $table->string('Phone_number');
            $table->unsignedBigInteger('Fk_department');
            $table->unsignedBigInteger('Fk_designation');
            $table->foreign('Fk_department')->references('id')->on('departments');
            $table->foreign('Fk_designation')->references('id')->on('designations');           
            $table->timestamp('created_at');
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

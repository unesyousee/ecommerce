<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            //--Important :

            $table->increments('id');
            $table->string('name');
            $table->string('mobile_number');
            $table->string('email')->nullable();

            //--Not important befor buy smt :

            $table->string('address')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('code_meli')->nullable();
            $table->string('gender')->nullable();
            $table->string('postal_code')->nullable();


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

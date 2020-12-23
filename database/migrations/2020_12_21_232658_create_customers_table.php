<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->unsignedBigInteger('employee_id')->nullable();
            $table->string('LastName');
            $table->string('FirstName');
            $table->string('Phone');
            $table->string('Adress1');
            $table->string('Adress2');
            $table->string('City');
            $table->string('State');
            $table->integer('PostalCode');
            $table->string('Country');
            $table->double('Creditlimit',19,0);
            $table->timestamps();

            $table->foreign('employee_id')->references('id')->on('Employees');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}

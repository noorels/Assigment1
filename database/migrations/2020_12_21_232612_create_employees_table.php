<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Office_id')->nullable();
            $table->integer('reportsTo');
            $table->string('LastName');
            $table->string('FirstName');
            $table->string('Extension');
            $table->string('Email');
            $table->string('JobTitle');
            $table->timestamps();

            $table->foreign('Office_id')->references('id')->on('Offices');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}

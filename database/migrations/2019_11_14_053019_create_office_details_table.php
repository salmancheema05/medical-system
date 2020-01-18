<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfficeDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('office_details', function (Blueprint $table) {
            $table->bigIncrements('office_id');
            $table->unsignedBigInteger('doctor_id');
            $table->unsignedBigInteger('city_id');
            $table->unsignedBigInteger('department_id');
            $table->string('morning_time',20)->nullable();
            $table->string('evening_time',20)->nullable();
            $table->string('days',100);
            $table->string('address',100);
            $table->string('fee',11);
            $table->string('phone',11);
            $table->string('experience',2);
            $table->timestamps();
            $table->foreign('doctor_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('city_id')->references('city_id')->on('cities')->onDelete('cascade');
            $table->foreign('department_id')->references('department_id')->on('departments')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('office_details');
    }
}

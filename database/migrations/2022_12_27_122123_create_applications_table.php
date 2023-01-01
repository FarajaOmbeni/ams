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
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->string('fname');
            $table->string('lname');
            $table->string('personal_email')->unique();
            $table->Integer('phone_number');
            $table->string('identification_number');
            $table->string('town');
            $table->string('home_county');
            $table->string('postal_address');
            $table->string('postal_code');
            $table->string('nationality');
            $table->string('address');
            $table->string('religion');
            $table->string('marital_status');
            $table->string('course');
            $table->string('intake');
            $table->string('dob')->nullable();
            $table->string('father_name')->nullable();
            $table->string('father_email')->nullable();
            $table->Integer('father_tel')->nullable();
            $table->string('father_occupation')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('mother_email')->nullable();
            $table->Integer('mother_tel')->nullable();
            $table->string('mother_occupation')->nullable();
            $table->string('guardian_name')->nullable();
            $table->string('guardian_email')->nullable();
            $table->Integer('guardian_tel')->nullable();
            $table->string('guardian_occupation')->nullable();
            $table->string('enrolled')->default('0');
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
        Schema::dropIfExists('applications');
    }
};

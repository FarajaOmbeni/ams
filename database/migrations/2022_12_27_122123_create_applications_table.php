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
            $table->string('personal_email');
            $table->Integer('phone_number');
            $table->string('identification_number');
            $table->string('town');
            $table->string('home_county');
            $table->string('postal_address');
            $table->string('postal_code');
            $table->string('residence');
            $table->string('address');
            $table->string('religion');
            $table->string('marital_status');
            $table->string('course');
            $table->string('father_name');
            $table->string('father_email');
            $table->Integer('father_tel');
            $table->string('father_occupation');
            $table->string('mother_name');
            $table->string('mother_email');
            $table->Integer('mother_tel');
            $table->string('mother_occupation');
            $table->string('guardian_name');
            $table->string('guardian_email');
            $table->Integer('guardian_tel');
            $table->string('guardian_occupation');
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

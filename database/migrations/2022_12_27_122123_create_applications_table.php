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
            $table->string('email');
            $table->Integer('phone_number');
            $table->string('identification_number');
            $table->string('county');
            $table->string('address');
            $table->string('course');
            $table->string('parent_name');
            $table->string('parent_email');
            $table->string('parent_tel');
            $table->string('sponsor_name');
            $table->string('sponsor_email');
            $table->string('sponsor_tel');
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

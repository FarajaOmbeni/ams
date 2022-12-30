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
        Schema::create('units', function (Blueprint $table) {
            $table->id();
            $table->integer('lecturer_id')->references('id')->on('users')->default(null);
            $table->string('name')->unique();
            $table->integer('registered_students')->unique()->nullable()->references('id')->on('users');
            $table->string('unit_code')->unique();
            $table->string('course_code')->references('course_code')->on('courses');
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
        Schema::dropIfExists('units');
    }
};

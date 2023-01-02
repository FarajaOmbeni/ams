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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->Integer('application_id')->references('id')->on('applications')->nullable();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('course_code')->references('course_code')->on('courses')->nullable();
            $table->string('units')->nullable();
            $table->string('password');
            $table->integer('role')->default(0);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('status')->nullable()->default('ACTIVE');
            $table->rememberToken();
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
};

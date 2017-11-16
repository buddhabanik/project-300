<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('userId');
            $table->string('fullName');
            $table->string('fatherName');
            $table->string('motherName');
            $table->string('gender');
            $table->date('birthDate')->format('d.m.Y');
            $table->string('email');
            $table->string('contact');
            $table->text('address');
            $table->string('class');
            $table->string('section');
            $table->integer('roll');
            $table->binary('picture')->nullable() ;
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
        Schema::dropIfExists('students');
    }
}

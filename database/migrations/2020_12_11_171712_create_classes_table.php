<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classes', function (Blueprint $table) {
            $table->id('code_classes');
            $table->time('hour');
            $table->date('start_date');
            $table->date('end_date');
            $table->float('price');

            $table->unsignedBigInteger('code_teacher')->unsigned();
            $table->foreign('code_teacher')->references('code_teacher')->on('teachers');

            $table->unsignedBigInteger('code_course')->unsigned();
            $table->foreign('code_course')->references('code_course')->on('courses');

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
        Schema::dropIfExists('classes');
    }
}

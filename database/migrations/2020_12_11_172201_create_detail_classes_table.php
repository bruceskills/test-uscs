<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_classes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('code_classes')->unsigned();
            $table->foreign('code_classes')->references('code_classes')->on('classes');

            $table->unsignedBigInteger('code_student')->unsigned();
            $table->foreign('code_student')->references('code_student')->on('students');
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
        Schema::dropIfExists('detail_classes');
    }
}

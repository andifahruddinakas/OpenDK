<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgramTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('das_program', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama', 100);
            $table->tinyInteger('sasaran')->nullable()->unsigned();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->string('description', 200)->nullable();
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
        Schema::dropIfExists('das_program');
    }
}

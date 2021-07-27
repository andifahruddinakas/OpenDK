<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ref_coa', function (Blueprint $table) {
            $table->char('id', 5);
            $table->integer('type_id');
            $table->integer('sub_id');
            $table->integer('sub_sub_id');
            $table->string('coa_name', 200);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ref_coa');
    }
}

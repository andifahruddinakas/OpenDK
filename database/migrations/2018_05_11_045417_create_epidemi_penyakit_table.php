<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEpidemiPenyakitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('das_epidemi_penyakit', function (Blueprint $table) {
            $table->increments('id');
            $table->char('kecamatan_id', 7);
            $table->char('desa_id', 10);
            $table->integer('bulan');
            $table->integer('tahun');
            $table->integer('penyakit_id');
            $table->integer('jumlah_penderita');
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
        Schema::dropIfExists('das_epidemi_penyakit');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProsesEktpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('das_proses_ektp', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('penduduk_id');
            $table->char('nik', 16);
            $table->tinyInteger('status_rekam');
            $table->string('alamat', 255);
            $table->date('tanggal_pengajuan');
            $table->date('tanggal_selesai')->nullable(true);
            $table->string('status', 50);
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
        Schema::dropIfExists('das_proses_ektp');
    }
}

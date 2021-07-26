<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableFasilitasPaud extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('das_fasilitas_paud', function (Blueprint $table) {
            $table->string('kecamatan_id', 8)->change();
            $table->string('desa_id', 13)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('das_fasilitas_paud', function (Blueprint $table) {
            $table->string('kecamatan_id', 7)->change();
            $table->string('desa_id', 10)->change();
        });
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableProfile extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('das_profil', function (Blueprint $table) {
            $table->string('kabupaten_id', 5)->change();
            $table->string('kecamatan_id', 8)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('das_profil', function (Blueprint $table) {
            $table->string('kabupaten_id', 4)->change();
            $table->string('kecamatan_id', 7)->change();
        });
    }
}

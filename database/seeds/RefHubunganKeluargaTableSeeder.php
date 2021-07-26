<?php

use Illuminate\Database\Seeder;

class RefHubunganKeluargaTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('ref_hubungan_keluarga')->delete();

        \DB::table('ref_hubungan_keluarga')->insert([
            0 => [
                'id'   => 1,
                'nama' => 'KEPALA KELUARGA',
            ],
            1 => [
                'id'   => 2,
                'nama' => 'SUAMI',
            ],
            2 => [
                'id'   => 3,
                'nama' => 'ISTRI',
            ],
            3 => [
                'id'   => 4,
                'nama' => 'ANAK',
            ],
            4 => [
                'id'   => 5,
                'nama' => 'MENANTU',
            ],
            5 => [
                'id'   => 6,
                'nama' => 'CUCU',
            ],
            6 => [
                'id'   => 7,
                'nama' => 'ORANGTUA',
            ],
            7 => [
                'id'   => 8,
                'nama' => 'MERTUA',
            ],
            8 => [
                'id'   => 9,
                'nama' => 'FAMILI LAIN',
            ],
            9 => [
                'id'   => 10,
                'nama' => 'PEMBANTU',
            ],
            10 => [
                'id'   => 11,
                'nama' => 'LAINNYA',
            ],
        ]);
    }
}

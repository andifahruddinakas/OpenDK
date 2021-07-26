<?php

use Illuminate\Database\Seeder;

class RefUmurTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('ref_umur')->delete();

        \DB::table('ref_umur')->insert([
            0 => [
                'id'     => 1,
                'nama'   => 'BAYI',
                'dari'   => 0,
                'sampai' => 5,
                'status' => 1,
            ],
            1 => [
                'id'     => 2,
                'nama'   => 'BALITA',
                'dari'   => 1,
                'sampai' => 5,
                'status' => 2,
            ],
            2 => [
                'id'     => 3,
                'nama'   => 'ANAK-ANAK',
                'dari'   => 6,
                'sampai' => 14,
                'status' => 1,
            ],
            3 => [
                'id'     => 4,
                'nama'   => 'REMAJA',
                'dari'   => 15,
                'sampai' => 24,
                'status' => 1,
            ],
            4 => [
                'id'     => 5,
                'nama'   => 'DEWASA',
                'dari'   => 25,
                'sampai' => 44,
                'status' => 1,
            ],
            5 => [
                'id'     => 6,
                'nama'   => 'TUA',
                'dari'   => 45,
                'sampai' => 74,
                'status' => 1,
            ],
            6 => [
                'id'     => 7,
                'nama'   => 'LANSIA',
                'dari'   => 75,
                'sampai' => 130,
                'status' => 1,
            ],
        ]);
    }
}

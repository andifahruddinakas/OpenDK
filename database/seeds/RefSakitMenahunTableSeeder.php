<?php

use Illuminate\Database\Seeder;

class RefSakitMenahunTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('ref_sakit_menahun')->delete();

        \DB::table('ref_sakit_menahun')->insert([
            0 => [
                'id'   => 1,
                'nama' => 'JANTUNG',
            ],
            1 => [
                'id'   => 2,
                'nama' => 'LEVER',
            ],
            2 => [
                'id'   => 3,
                'nama' => 'PARU-PARU',
            ],
            3 => [
                'id'   => 4,
                'nama' => 'KANKER',
            ],
            4 => [
                'id'   => 5,
                'nama' => 'STROKE',
            ],
            5 => [
                'id'   => 6,
                'nama' => 'DIABETES MELITUS',
            ],
            6 => [
                'id'   => 7,
                'nama' => 'GINJAL',
            ],
            7 => [
                'id'   => 8,
                'nama' => 'MALARIA',
            ],
            8 => [
                'id'   => 9,
                'nama' => 'LEPRA/KUSTA',
            ],
            9 => [
                'id'   => 10,
                'nama' => 'HIV/AIDS',
            ],
            10 => [
                'id'   => 11,
                'nama' => 'GILA/STRESS',
            ],
            11 => [
                'id'   => 12,
                'nama' => 'TBC',
            ],
            12 => [
                'id'   => 13,
                'nama' => 'ASTHMA',
            ],
            13 => [
                'id'   => 14,
                'nama' => 'TIDAK ADA/TIDAK SAKIT',
            ],
        ]);
    }
}

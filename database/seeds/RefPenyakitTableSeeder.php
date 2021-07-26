<?php

use Illuminate\Database\Seeder;

class RefPenyakitTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('ref_penyakit')->delete();

        \DB::table('ref_penyakit')->insert([
            0 => [
                'id'         => 1,
                'nama'       => 'Demam Berdarah',
                'created_at' => '2018-05-11 04:43:28',
                'updated_at' => '2018-05-11 04:43:28',
            ],
            1 => [
                'id'         => 2,
                'nama'       => 'Kolera',
                'created_at' => '2018-05-11 04:45:21',
                'updated_at' => '2018-05-11 04:45:21',
            ],
            2 => [
                'id'         => 3,
                'nama'       => 'Malaria',
                'created_at' => '2018-05-11 04:45:28',
                'updated_at' => '2018-05-11 04:45:28',
            ],
            3 => [
                'id'         => 4,
                'nama'       => 'Influensa',
                'created_at' => '2018-05-11 04:45:36',
                'updated_at' => '2018-05-11 04:45:36',
            ],
        ]);
    }
}

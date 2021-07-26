<?php

use Illuminate\Database\Seeder;

class RefAgamaTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('ref_agama')->delete();

        \DB::table('ref_agama')->insert([
            0 => [
                'id'   => 1,
                'nama' => 'ISLAM',
            ],
            1 => [
                'id'   => 2,
                'nama' => 'KRISTEN',
            ],
            2 => [
                'id'   => 3,
                'nama' => 'KATHOLIK',
            ],
            3 => [
                'id'   => 4,
                'nama' => 'HINDU',
            ],
            4 => [
                'id'   => 5,
                'nama' => 'BUDHA',
            ],
            5 => [
                'id'   => 6,
                'nama' => 'KHONGHUCU',
            ],
            6 => [
                'id'   => 7,
                'nama' => 'Lainnya',
            ],
        ]);
    }
}

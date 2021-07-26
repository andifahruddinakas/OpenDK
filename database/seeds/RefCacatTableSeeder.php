<?php

use Illuminate\Database\Seeder;

class RefCacatTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('ref_cacat')->delete();

        \DB::table('ref_cacat')->insert([
            0 => [
                'id'   => 1,
                'nama' => 'CACAT FISIK',
            ],
            1 => [
                'id'   => 2,
                'nama' => 'CACAT NETRA/BUTA',
            ],
            2 => [
                'id'   => 3,
                'nama' => 'CACAT RUNGU/WICARA',
            ],
            3 => [
                'id'   => 4,
                'nama' => 'CACAT MENTAL/JIWA',
            ],
            4 => [
                'id'   => 5,
                'nama' => 'CACAT FISIK DAN MENTAL',
            ],
            5 => [
                'id'   => 6,
                'nama' => 'CACAT LAINNYA',
            ],
            6 => [
                'id'   => 7,
                'nama' => 'TIDAK CACAT',
            ],
        ]);
    }
}

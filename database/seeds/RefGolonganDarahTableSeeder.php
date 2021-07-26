<?php

use Illuminate\Database\Seeder;

class RefGolonganDarahTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('ref_golongan_darah')->delete();

        \DB::table('ref_golongan_darah')->insert([
            0 => [
                'id'   => 1,
                'nama' => 'A',
            ],
            1 => [
                'id'   => 2,
                'nama' => 'B',
            ],
            2 => [
                'id'   => 3,
                'nama' => 'AB',
            ],
            3 => [
                'id'   => 4,
                'nama' => 'O',
            ],

            4 => [
                'id'   => 13,
                'nama' => 'TIDAK TAHU',
            ],
        ]);
    }
}

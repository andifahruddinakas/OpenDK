<?php

use Illuminate\Database\Seeder;

class RefWarganegaraTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('ref_warganegara')->delete();

        \DB::table('ref_warganegara')->insert([
            0 => [
                'id'   => 1,
                'nama' => 'WNI',
            ],
            1 => [
                'id'   => 2,
                'nama' => 'WNA',
            ],
            2 => [
                'id'   => 3,
                'nama' => 'DUA KEWARGANEGARAAN',
            ],
        ]);
    }
}

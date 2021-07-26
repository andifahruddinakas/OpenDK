<?php

use Illuminate\Database\Seeder;

class RefKawinTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('ref_kawin')->delete();

        \DB::table('ref_kawin')->insert([
            0 => [
                'id'   => 1,
                'nama' => 'BELUM KAWIN',
            ],
            1 => [
                'id'   => 2,
                'nama' => 'KAWIN',
            ],
            2 => [
                'id'   => 3,
                'nama' => 'CERAI HIDUP',
            ],
            3 => [
                'id'   => 4,
                'nama' => 'CERAI MATI',
            ],
        ]);
    }
}

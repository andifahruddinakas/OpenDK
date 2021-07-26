<?php

use Illuminate\Database\Seeder;

class RefCaraKbTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('ref_cara_kb')->delete();

        \DB::table('ref_cara_kb')->insert([
            0 => [
                'id'   => 1,
                'nama' => 'Pil',
                'sex'  => 2,
            ],
            1 => [
                'id'   => 2,
                'nama' => 'IUD',
                'sex'  => 2,
            ],
            2 => [
                'id'   => 3,
                'nama' => 'Suntik',
                'sex'  => 2,
            ],
            3 => [
                'id'   => 4,
                'nama' => 'Kondom',
                'sex'  => 1,
            ],
            4 => [
                'id'   => 5,
                'nama' => 'Susuk KB',
                'sex'  => 2,
            ],
            5 => [
                'id'   => 6,
                'nama' => 'Sterilisasi Wanita',
                'sex'  => 2,
            ],
            6 => [
                'id'   => 7,
                'nama' => 'Sterilisasi Pria',
                'sex'  => 1,
            ],
            7 => [
                'id'   => 99,
                'nama' => 'Lainnya',
                'sex'  => 3,
            ],
        ]);
    }
}

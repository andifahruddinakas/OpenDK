<?php

use Illuminate\Database\Seeder;

class RefPendidikanKkTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('ref_pendidikan_kk')->delete();

        \DB::table('ref_pendidikan_kk')->insert([
            0 => [
                'id'   => 1,
                'nama' => 'TIDAK / BELUM SEKOLAH',
            ],
            1 => [
                'id'   => 2,
                'nama' => 'BELUM TAMAT SD/SEDERAJAT',
            ],
            2 => [
                'id'   => 3,
                'nama' => 'TAMAT SD / SEDERAJAT',
            ],
            3 => [
                'id'   => 4,
                'nama' => 'SLTP/SEDERAJAT',
            ],
            4 => [
                'id'   => 5,
                'nama' => 'SLTA / SEDERAJAT',
            ],
            5 => [
                'id'   => 6,
                'nama' => 'DIPLOMA I / II',
            ],
            6 => [
                'id'   => 7,
                'nama' => 'AKADEMI/ DIPLOMA III/S. MUDA',
            ],
            7 => [
                'id'   => 8,
                'nama' => 'DIPLOMA IV/ STRATA I',
            ],
            8 => [
                'id'   => 9,
                'nama' => 'STRATA II',
            ],
            9 => [
                'id'   => 10,
                'nama' => 'STRATA III',
            ],
        ]);
    }
}

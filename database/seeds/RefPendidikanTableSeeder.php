<?php

use Illuminate\Database\Seeder;

class RefPendidikanTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('ref_pendidikan')->delete();

        \DB::table('ref_pendidikan')->insert([
            0 => [
                'id'   => 1,
                'nama' => 'BELUM MASUK TK/KELOMPOK BERMAIN',
            ],
            1 => [
                'id'   => 2,
                'nama' => 'SEDANG TK/KELOMPOK BERMAIN',
            ],
            2 => [
                'id'   => 3,
                'nama' => 'TIDAK PERNAH SEKOLAH',
            ],
            3 => [
                'id'   => 4,
                'nama' => 'SEDANG SD/SEDERAJAT',
            ],
            4 => [
                'id'   => 5,
                'nama' => 'TIDAK TAMAT SD/SEDERAJAT',
            ],
            5 => [
                'id'   => 6,
                'nama' => 'SEDANG SLTP/SEDERAJAT',
            ],
            6 => [
                'id'   => 7,
                'nama' => 'SEDANG SLTA/SEDERAJAT',
            ],
            7 => [
                'id'   => 8,
                'nama' => 'SEDANG  D-1/SEDERAJAT',
            ],
            8 => [
                'id'   => 9,
                'nama' => 'SEDANG D-2/SEDERAJAT',
            ],
            9 => [
                'id'   => 10,
                'nama' => 'SEDANG D-3/SEDERAJAT',
            ],
            10 => [
                'id'   => 11,
                'nama' => 'SEDANG  S-1/SEDERAJAT',
            ],
            11 => [
                'id'   => 12,
                'nama' => 'SEDANG S-2/SEDERAJAT',
            ],
            12 => [
                'id'   => 13,
                'nama' => 'SEDANG S-3/SEDERAJAT',
            ],
            13 => [
                'id'   => 14,
                'nama' => 'SEDANG SLB A/SEDERAJAT',
            ],
            14 => [
                'id'   => 15,
                'nama' => 'SEDANG SLB B/SEDERAJAT',
            ],
            15 => [
                'id'   => 16,
                'nama' => 'SEDANG SLB C/SEDERAJAT',
            ],
            16 => [
                'id'   => 17,
                'nama' => 'TIDAK DAPAT MEMBACA DAN MENULIS HURUF LATIN/ARAB',
            ],
            17 => [
                'id'   => 18,
                'nama' => 'TIDAK SEDANG SEKOLAH',
            ],
        ]);
    }
}

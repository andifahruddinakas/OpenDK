<?php

namespace Database\Seeds\Demo;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContohDasDataDesaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kecamatan_id = config('app.default_profile');

        DB::table('das_data_desa')->delete();

        DB::table('das_data_desa')->insert([
            0 => [
                'desa_id'      => $kecamatan_id.'.2001',
                'kecamatan_id' => $kecamatan_id,
                'nama'         => 'Bedalewun',
            ],
            1 => [
                'desa_id'      => $kecamatan_id.'.2002',
                'kecamatan_id' => $kecamatan_id,
                'nama'         => 'Lebanuba',
            ],
            2 => [
                'desa_id'      => $kecamatan_id.'.2003',
                'kecamatan_id' => $kecamatan_id,
                'nama'         => 'Rianwale',
            ],
            3 => [
                'desa_id'      => $kecamatan_id.'.2004',
                'kecamatan_id' => $kecamatan_id,
                'nama'         => 'Bungalawan',
            ],
            4 => [
                'desa_id'      => $kecamatan_id.'.2005',
                'kecamatan_id' => $kecamatan_id,
                'nama'         => 'Lamawolo',
            ],
            5 => [
                'desa_id'      => $kecamatan_id.'.2006',
                'kecamatan_id' => $kecamatan_id,
                'nama'         => 'Helanlangowuyo',
            ],
            6 => [
                'desa_id'      => $kecamatan_id.'.2007',
                'kecamatan_id' => $kecamatan_id,
                'nama'         => 'Lewopao',
            ],
            7 => [
                'desa_id'      => $kecamatan_id.'.2008',
                'kecamatan_id' => $kecamatan_id,
                'nama'         => 'Nelereren',
            ],
            8 => [
                'desa_id'      => $kecamatan_id.'.2009',
                'kecamatan_id' => $kecamatan_id,
                'nama'         => 'Boleng',
            ],
            9 => [
                'desa_id'      => $kecamatan_id.'.2010',
                'kecamatan_id' => $kecamatan_id,
                'nama'         => 'Neleblolong',
            ],
            10 => [
                'desa_id'      => $kecamatan_id.'.2011',
                'kecamatan_id' => $kecamatan_id,
                'nama'         => 'Duablolong',
            ],
            11 => [
                'desa_id'      => $kecamatan_id.'.2012',
                'kecamatan_id' => $kecamatan_id,
                'nama'         => 'Lewokeleng',
            ],
            12 => [
                'desa_id'      => $kecamatan_id.'.2013',
                'kecamatan_id' => $kecamatan_id,
                'nama'         => 'Nelelamawangi',
            ],
            13 => [
                'desa_id'      => $kecamatan_id.'.2014',
                'kecamatan_id' => $kecamatan_id,
                'nama'         => 'Harubala',
            ],
            14 => [
                'desa_id'      => $kecamatan_id.'.2015',
                'kecamatan_id' => $kecamatan_id,
                'nama'         => 'Nelelamadike',
            ],
            15 => [
                'desa_id'      => $kecamatan_id.'.2016',
                'kecamatan_id' => $kecamatan_id,
                'nama'         => 'Lamabayung',
            ],
            16 => [
                'desa_id'      => $kecamatan_id.'.2017',
                'kecamatan_id' => $kecamatan_id,
                'nama'         => 'Lewat',
            ],
            17 => [
                'desa_id'      => $kecamatan_id.'.2018',
                'kecamatan_id' => $kecamatan_id,
                'nama'         => 'Dokeng',
            ],
            18 => [
                'desa_id'      => $kecamatan_id.'.2019',
                'kecamatan_id' => $kecamatan_id,
                'nama'         => 'Bayuntaa',
            ],
            19 => [
                'desa_id'      => $kecamatan_id.'.2020',
                'kecamatan_id' => $kecamatan_id,
                'nama'         => 'Nobo',
            ],
            20 => [
                'desa_id'      => $kecamatan_id.'.2021',
                'kecamatan_id' => $kecamatan_id,
                'nama'         => 'Nelelamawangi Dua',
            ],
        ]);
    }
}

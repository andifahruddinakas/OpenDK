<?php

use Illuminate\Database\Seeder;

class RefSubCoaTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('ref_sub_coa')->delete();

        \DB::table('ref_sub_coa')->insert([
            0 => [
                'id'       => 1,
                'type_id'  => 4,
                'sub_name' => 'Pendapatan Asli Desa
',
            ],
            1 => [
                'id'       => 2,
                'type_id'  => 4,
                'sub_name' => 'Transfer',
            ],
            2 => [
                'id'       => 3,
                'type_id'  => 4,
                'sub_name' => 'Pendapatan Lain-lain',
            ],
            3 => [
                'id'       => 1,
                'type_id'  => 5,
                'sub_name' => 'Belanja Pegawai',
            ],
            4 => [
                'id'       => 2,
                'type_id'  => 5,
                'sub_name' => 'Belanja Barang dan Jasa',
            ],
            5 => [
                'id'       => 3,
                'type_id'  => 5,
                'sub_name' => 'Belanja Modal',
            ],
            6 => [
                'id'       => 4,
                'type_id'  => 5,
                'sub_name' => 'Belanja Tak Terduga',
            ],
            7 => [
                'id'       => 1,
                'type_id'  => 6,
                'sub_name' => 'Penerimaan Pembiayaan',
            ],
            8 => [
                'id'       => 2,
                'type_id'  => 6,
                'sub_name' => 'Pengeluaran Pembiayaan',
            ],
        ]);
    }
}

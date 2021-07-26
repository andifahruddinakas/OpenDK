<?php

use Illuminate\Database\Seeder;

class RefCoaTypeTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('ref_coa_type')->delete();

        \DB::table('ref_coa_type')->insert([
            0 => [
                'id'        => 4,
                'type_name' => 'PENDAPATAN',
            ],
            1 => [
                'id'        => 5,
                'type_name' => 'BELANJA',
            ],
            2 => [
                'id'        => 6,
                'type_name' => 'PEMBIAYAAN',
            ],
        ]);
    }
}

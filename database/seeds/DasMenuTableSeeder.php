<?php

use Illuminate\Database\Seeder;

class DasMenuTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('das_menu')->delete();

        \DB::table('das_menu')->insert([
            0 =>
            [
                'id' => 1,
                'parent_id' => '0',
                'name' => 'Data',
                'slug' => 'data',
                'icon' => 'fa-book',
                'url' => 'data',
                'is_active' => 1,
                'created_at' => null,
                'updated_at' => null,
            ],
            1 =>
            [
                'id' => 2,
                'parent_id' => '1',
                'name' => 'Kecamatan',
                'slug' => 'data-kecamatan',
                'icon' => 'fa-book',
                'url' => 'data/kecamatan',
                'is_active' => 1,
                'created_at' => null,
                'updated_at' => null,
            ],
            2 =>
            [
                'id' => 3,
                'parent_id' => '1',
                'name' => 'Penduduk',
                'slug' => 'data-penduduk',
                'icon' => 'fa-book',
                'url' => 'data/penduduk',
                'is_active' => 1,
                'created_at' => null,
                'updated_at' => null,
            ],
            3 =>
            [
                'id' => 4,
                'parent_id' => '1',
                'name' => 'Kesehatan',
                'slug' => 'data-kesehatan',
                'icon' => 'fa-book',
                'url' => 'data/kesehatan',
                'is_active' => 1,
                'created_at' => null,
                'updated_at' => null,
            ],
            4 =>
            [
                'id' => 5,
                'parent_id' => '1',
                'name' => 'Pendidikan',
                'slug' => 'data-pendidikan',
                'icon' => 'fa-book',
                'url' => 'data/pendidikan',
                'is_active' => 1,
                'created_at' => null,
                'updated_at' => null,
            ],
            5 =>
            [
                'id' => 6,
                'parent_id' => '1',
                'name' => 'Program Bantuan',
                'slug' => 'data-programbantuan',
                'icon' => 'fa-book',
                'url' => 'data/program-bantuan',
                'is_active' => 1,
                'created_at' => null,
                'updated_at' => null,
            ],
            6 =>
            [
                'id' => 7,
                'parent_id' => '1',
                'name' => 'Anggaran & Realisasi',
                'slug' => 'data-anggaranrealisasi',
                'icon' => 'fa-book',
                'url' => 'data/anggaran-realisasi',
                'is_active' => 1,
                'created_at' => null,
                'updated_at' => null,
            ],
            7 =>
            [
                'id' => 8,
                'parent_id' => '1',
                'name' => 'Anggaran Desa',
                'slug' => 'data-anggarandesa',
                'icon' => 'fa-book',
                'url' => 'data/anggaran-desa',
                'is_active' => 1,
                'created_at' => null,
                'updated_at' => null,
            ],
            8 =>
            [
                'id' => 9,
                'parent_id' => '1',
                'name' => 'Layanan Kecamatan',
                'slug' => 'data-layanan',
                'icon' => 'fa-book',
                'url' => 'data/layanan',
                'is_active' => 1,
                'created_at' => null,
                'updated_at' => null,
            ],
            9 =>
            [
                'id' => 10,
                'parent_id' => '0',
                'name' => 'Admin Keluhan',
                'slug' => 'adminsikoma',
                'icon' => 'fa-book',
                'url' => 'admin-komplain',
                'is_active' => 1,
                'created_at' => null,
                'updated_at' => null,
            ],
            10 =>
            [
                'id' => 11,
                'parent_id' => '0',
                'name' => 'Pengaturan',
                'slug' => 'setting',
                'icon' => 'fa-book',
                'url' => 'settings',
                'is_active' => 1,
                'created_at' => null,
                'updated_at' => null,
            ],
            11 =>
            [
                'id' => 12,
                'parent_id' => '11',
                'name' => 'Kategori Komplain',
                'slug' => 'setting-kategorikomplain',
                'icon' => 'fa-book',
                'url' => 'setting/kategori-komplain',
                'is_active' => 1,
                'created_at' => null,
                'updated_at' => null,
            ],
            12 =>
            [
                'id' => 13,
                'parent_id' => '11',
                'name' => 'Tipe Regulasi',
                'slug' => 'setting-tiperegulasi',
                'icon' => 'fa-book',
                'url' => 'setting/tipe-regulasi',
                'is_active' => 1,
                'created_at' => null,
                'updated_at' => null,
            ],
            13 =>
            [
                'id' => 14,
                'parent_id' => '11',
                'name' => 'Jenis Penyakit',
                'slug' => 'setting-jenispenyakit',
                'icon' => 'fa-book',
                'url' => 'setting/jenis-penyakit',
                'is_active' => 1,
                'created_at' => null,
                'updated_at' => null,
            ],
            14 =>
            [
                'id' => 15,
                'parent_id' => '11',
                'name' => 'COA',
                'slug' => 'setting-coa',
                'icon' => 'fa-book',
                'url' => 'setting/coa',
                'is_active' => 1,
                'created_at' => null,
                'updated_at' => null,
            ],
            15 =>
            [
                'id' => 16,
                'parent_id' => '11',
                'name' => 'Grup Pengguna',
                'slug' => 'setting-gruppengguna',
                'icon' => 'fa-book',
                'url' => 'setting/role',
                'is_active' => 1,
                'created_at' => null,
                'updated_at' => null,
            ],
            16 =>
            [
                'id' => 17,
                'parent_id' => '11',
                'name' => 'Pengguna',
                'slug' => 'setting-pengguna',
                'icon' => 'fa-book',
                'url' => 'setting/user',
                'is_active' => 1,
                'created_at' => null,
                'updated_at' => null,
            ],
            17 =>
            [
                'id' => 18,
                'parent_id' => '11',
                'name' => 'Halaman Beranda',
                'slug' => 'setting-dashboard',
                'icon' => 'fa-book',
                'url' => 'setting/user',
                'is_active' => 1,
                'created_at' => null,
                'updated_at' => null,
            ],
        ]);
    }
}

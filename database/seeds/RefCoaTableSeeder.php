<?php

use Illuminate\Database\Seeder;

class RefCoaTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('ref_coa')->delete();

        \DB::table('ref_coa')->insert([
            0 => [
                'id' => '01',
                'type_id' => 4,
                'sub_id' => 1,
                'sub_sub_id' => 1,
                'coa_name' => 'Bagi Hasil BUMDes',
            ],
            1 => [
                'id' => '90-99',
                'type_id' => 4,
                'sub_id' => 1,
                'sub_sub_id' => 1,
                'coa_name' => 'Lain-lain',
            ],
            2 => [
                'id' => '01',
                'type_id' => 4,
                'sub_id' => 1,
                'sub_sub_id' => 2,
                'coa_name' => 'Pengelolaan Tanah Kas Desa',
            ],
            3 => [
                'id' => '02',
                'type_id' => 4,
                'sub_id' => 1,
                'sub_sub_id' => 2,
                'coa_name' => 'Tambatan Perahu',
            ],
            4 => [
                'id' => '03',
                'type_id' => 4,
                'sub_id' => 1,
                'sub_sub_id' => 2,
                'coa_name' => 'Pasar Desa',
            ],
            5 => [
                'id' => '04',
                'type_id' => 4,
                'sub_id' => 1,
                'sub_sub_id' => 2,
                'coa_name' => 'Tempat Pemandian Umum',
            ],
            6 => [
                'id' => '05',
                'type_id' => 4,
                'sub_id' => 1,
                'sub_sub_id' => 2,
                'coa_name' => 'Jaringan Irigasi Desa',
            ],
            7 => [
                'id' => '06',
                'type_id' => 4,
                'sub_id' => 1,
                'sub_sub_id' => 2,
                'coa_name' => 'Pelelangan Ikan Milik Desa',
            ],
            8 => [
                'id' => '07',
                'type_id' => 4,
                'sub_id' => 1,
                'sub_sub_id' => 2,
                'coa_name' => 'Kios Milik Desa',
            ],
            9 => [
                'id' => '08',
                'type_id' => 4,
                'sub_id' => 1,
                'sub_sub_id' => 2,
                'coa_name' => 'Pemanfaatan Lapangan/Prasarana Olah raga Milik Desa',
            ],
            10 => [
                'id' => '90-99',
                'type_id' => 4,
                'sub_id' => 1,
                'sub_sub_id' => 2,
                'coa_name' => 'Lain-lain',
            ],
            11 => [
                'id' => '01',
                'type_id' => 4,
                'sub_id' => 1,
                'sub_sub_id' => 3,
                'coa_name' => 'Swadaya, partisipasi dan gotong royong',
            ],
            12 => [
                'id' => '90-99',
                'type_id' => 4,
                'sub_id' => 1,
                'sub_sub_id' => 3,
                'coa_name' => 'Lain-lain Swadaya, Partisipasi dan Gotong Royong',
            ],
            13 => [
                'id' => '01',
                'type_id' => 4,
                'sub_id' => 1,
                'sub_sub_id' => 4,
                'coa_name' => 'Hasil Pungutan Desa',
            ],
            14 => [
                'id' => '90-99',
                'type_id' => 4,
                'sub_id' => 1,
                'sub_sub_id' => 4,
                'coa_name' => 'Lain-lain',
            ],
            15 => [
                'id' => '01',
                'type_id' => 4,
                'sub_id' => 2,
                'sub_sub_id' => 1,
                'coa_name' => 'Dana Desa',
            ],
            16 => [
                'id' => '01',
                'type_id' => 4,
                'sub_id' => 2,
                'sub_sub_id' => 2,
                'coa_name' => 'Bagian dari Hasil Pajak dan Retribusi Daerah Kabupaten/kota',
            ],
            17 => [
                'id' => '01',
                'type_id' => 4,
                'sub_id' => 2,
                'sub_sub_id' => 3,
                'coa_name' => 'Alokasi Dana Desa',
            ],
            18 => [
                'id' => '01',
                'type_id' => 4,
                'sub_id' => 2,
                'sub_sub_id' => 4,
                'coa_name' => 'Bantuan Keuangan dari APBD Provinsi',
            ],
            19 => [
                'id' => '90-99',
                'type_id' => 4,
                'sub_id' => 2,
                'sub_sub_id' => 4,
                'coa_name' => 'Lain-lain Bantuan Keuangan dari APBD Provinsi',
            ],
            20 => [
                'id' => '01',
                'type_id' => 4,
                'sub_id' => 2,
                'sub_sub_id' => 5,
                'coa_name' => 'Bantuan Keuangan APBD Kabupaten/Kota',
            ],
            21 => [
                'id' => '90-99',
                'type_id' => 4,
                'sub_id' => 2,
                'sub_sub_id' => 5,
                'coa_name' => 'Lain-lain Bantuan Keuangan dari APBD Kabupaten/Kota',
            ],
            22 => [
                'id' => '01',
                'type_id' => 4,
                'sub_id' => 3,
                'sub_sub_id' => 1,
                'coa_name' => 'Penerimaan dari Hasil Kerjasama antar Desa ',
            ],
            23 => [
                'id' => '01',
                'type_id' => 4,
                'sub_id' => 3,
                'sub_sub_id' => 2,
                'coa_name' => 'Penerimaan dari Hasil Kerjasama Desa dengan Pihak Ketiga',
            ],
            24 => [
                'id' => '01',
                'type_id' => 4,
                'sub_id' => 3,
                'sub_sub_id' => 3,
                'coa_name' => 'Penerimaan dari Bantuan Perusahaan yang berlokasi di Desa',
            ],
            25 => [
                'id' => '01',
                'type_id' => 4,
                'sub_id' => 3,
                'sub_sub_id' => 4,
                'coa_name' => 'Hibah dan sumbangan dari Pihak Ketiga',
            ],
            26 => [
                'id' => '01',
                'type_id' => 4,
                'sub_id' => 3,
                'sub_sub_id' => 5,
                'coa_name' => 'Koreksi kesalahan belanja tahun-tahun anggaran sebelumnya yang mengakibatkan penerimaan di kas Desa pada tahun anggaran berjalan',
            ],
            27 => [
                'id' => '01',
                'type_id' => 4,
                'sub_id' => 3,
                'sub_sub_id' => 6,
                'coa_name' => 'Bunga Bank',
            ],
            28 => [
                'id' => '90-99',
                'type_id' => 4,
                'sub_id' => 3,
                'sub_sub_id' => 9,
                'coa_name' => 'Lain-lain pendapatan Desa yang sah',
            ],
            29 => [
                'id' => '01',
                'type_id' => 5,
                'sub_id' => 1,
                'sub_sub_id' => 1,
                'coa_name' => 'Penghasilan Tetap Kepala Desa',
            ],
            30 => [
                'id' => '02',
                'type_id' => 5,
                'sub_id' => 1,
                'sub_sub_id' => 1,
                'coa_name' => 'Tunjangan Kepala Desa',
            ],
            31 => [
                'id' => '90-99',
                'type_id' => 5,
                'sub_id' => 1,
                'sub_sub_id' => 1,
                'coa_name' => 'Penerimaan Lain Kepala Desa yang Sah',
            ],
            32 => [
                'id' => '01',
                'type_id' => 5,
                'sub_id' => 1,
                'sub_sub_id' => 2,
                'coa_name' => 'Penghasilan Tetap Perangkat Desa',
            ],
            33 => [
                'id' => '02',
                'type_id' => 5,
                'sub_id' => 1,
                'sub_sub_id' => 2,
                'coa_name' => 'Tunjangan Perangkat Desa',
            ],
            34 => [
                'id' => '90-99',
                'type_id' => 5,
                'sub_id' => 1,
                'sub_sub_id' => 2,
                'coa_name' => 'Penerimaan Lain Perangkat Desa yang Sah',
            ],
            35 => [
                'id' => '01',
                'type_id' => 5,
                'sub_id' => 1,
                'sub_sub_id' => 3,
                'coa_name' => 'Jaminan Kesehatan Kepala Desa',
            ],
            36 => [
                'id' => '02',
                'type_id' => 5,
                'sub_id' => 1,
                'sub_sub_id' => 3,
                'coa_name' => 'Jaminan Kesehatan Perangkat Desa',
            ],
            37 => [
                'id' => '03',
                'type_id' => 5,
                'sub_id' => 1,
                'sub_sub_id' => 3,
                'coa_name' => 'Jaminan Ketenagakerjaan Kepala Desa',
            ],
            38 => [
                'id' => '04',
                'type_id' => 5,
                'sub_id' => 1,
                'sub_sub_id' => 3,
                'coa_name' => 'Jaminan Ketenagakerjaan Perangkat Desa',
            ],
            39 => [
                'id' => '01',
                'type_id' => 5,
                'sub_id' => 1,
                'sub_sub_id' => 4,
                'coa_name' => 'Tunjangan Kedudukan BPD',
            ],
            40 => [
                'id' => '02',
                'type_id' => 5,
                'sub_id' => 1,
                'sub_sub_id' => 4,
                'coa_name' => 'Tunjangan Kinerja BPD',
            ],
            41 => [
                'id' => '01',
                'type_id' => 5,
                'sub_id' => 2,
                'sub_sub_id' => 1,
                'coa_name' => 'Belanja Perlengkapan Alat Tulis Kantor dan Benda Pos',
            ],
            42 => [
                'id' => '02',
                'type_id' => 5,
                'sub_id' => 2,
                'sub_sub_id' => 1,
                'coa_name' => 'Belanja Perlengkapan Alat-alat Listrik',
            ],
            43 => [
                'id' => '03',
                'type_id' => 5,
                'sub_id' => 2,
                'sub_sub_id' => 1,
                'coa_name' => 'Belanja Perlengkapan Alat-alat Rumah Tangga/Peralatan dan Bahan Kebersihan',
            ],
            44 => [
                'id' => '04',
                'type_id' => 5,
                'sub_id' => 2,
                'sub_sub_id' => 1,
                'coa_name' => 'Belanja Bahan Bakar Minyak/Gas/Isi Ulang Tabung Pemadam Kebakaran',
            ],
            45 => [
                'id' => '05',
                'type_id' => 5,
                'sub_id' => 2,
                'sub_sub_id' => 1,
                'coa_name' => 'Belanja Perlengkapan Cetak/Penggandaan - Belanja Barang Cetak dan Penggandaan',
            ],
            46 => [
                'id' => '06',
                'type_id' => 5,
                'sub_id' => 2,
                'sub_sub_id' => 1,
                'coa_name' => 'Belanja Perlengkapan Barang Konsumsi (Makan/minum) - Belanja Barang Konsumsi',
            ],
            47 => [
                'id' => '07',
                'type_id' => 5,
                'sub_id' => 2,
                'sub_sub_id' => 1,
                'coa_name' => 'Belanja Bahan/Material',
            ],
            48 => [
                'id' => '08',
                'type_id' => 5,
                'sub_id' => 2,
                'sub_sub_id' => 1,
                'coa_name' => 'Belanja Bendera/Umbul-umbul/Spanduk',
            ],
            49 => [
                'id' => '09',
                'type_id' => 5,
                'sub_id' => 2,
                'sub_sub_id' => 1,
                'coa_name' => 'Belanja Pakaian Dinas/Seragam/Atribut',
            ],
            50 => [
                'id' => '10',
                'type_id' => 5,
                'sub_id' => 2,
                'sub_sub_id' => 1,
                'coa_name' => 'Belanja Obat-obatan',
            ],
            51 => [
                'id' => '11',
                'type_id' => 5,
                'sub_id' => 2,
                'sub_sub_id' => 1,
                'coa_name' => 'Belanja Pakan Hewan/Ikan, Obat-obatan Hewan',
            ],
            52 => [
                'id' => '12',
                'type_id' => 5,
                'sub_id' => 2,
                'sub_sub_id' => 1,
                'coa_name' => 'Belanja Pupuk/Obat-obatan Pertanian',
            ],
            53 => [
                'id' => '90-99',
                'type_id' => 5,
                'sub_id' => 2,
                'sub_sub_id' => 1,
                'coa_name' => 'Belanja Barang Perlengkapan Lainnya',
            ],
            54 => [
                'id' => '01',
                'type_id' => 5,
                'sub_id' => 2,
                'sub_sub_id' => 2,
                'coa_name' => 'Belanja Jasa Honorarium Tim yang Melaksanakan Kegiatan',
            ],
            55 => [
                'id' => '02',
                'type_id' => 5,
                'sub_id' => 2,
                'sub_sub_id' => 2,
                'coa_name' => 'Belanja Jasa Honorarium Pembantu Tugas Umum Desa/Operator',
            ],
            56 => [
                'id' => '03',
                'type_id' => 5,
                'sub_id' => 2,
                'sub_sub_id' => 2,
                'coa_name' => 'Belanja Jasa Honorarium/Insentif Pelayanan Desa',
            ],
            57 => [
                'id' => '04',
                'type_id' => 5,
                'sub_id' => 2,
                'sub_sub_id' => 2,
                'coa_name' => 'Belanja Jasa Honorarium Ahli/Profesi/Konsultan/Narasumber',
            ],
            58 => [
                'id' => '05',
                'type_id' => 5,
                'sub_id' => 2,
                'sub_sub_id' => 2,
                'coa_name' => 'Belanja Jasa Honorarium Petugas',
            ],
            59 => [
                'id' => '90-99',
                'type_id' => 5,
                'sub_id' => 2,
                'sub_sub_id' => 2,
                'coa_name' => 'Belanja Jasa Honorarium Lainnya',
            ],
            60 => [
                'id' => '01',
                'type_id' => 5,
                'sub_id' => 2,
                'sub_sub_id' => 3,
                'coa_name' => 'Belanja Perjalanan Dinas Dalam Kabupaten/Kota',
            ],
            61 => [
                'id' => '02',
                'type_id' => 5,
                'sub_id' => 2,
                'sub_sub_id' => 3,
                'coa_name' => 'Belanja Perjalanan Dinas Luar Kabupaten/Kota',
            ],
            62 => [
                'id' => '03',
                'type_id' => 5,
                'sub_id' => 2,
                'sub_sub_id' => 3,
                'coa_name' => 'Belanja Kursus/Pelatihan',
            ],
            63 => [
                'id' => '01',
                'type_id' => 5,
                'sub_id' => 2,
                'sub_sub_id' => 4,
                'coa_name' => 'Belanja Jasa Sewa Bangunan/Gedung/Ruang',
            ],
            64 => [
                'id' => '02',
                'type_id' => 5,
                'sub_id' => 2,
                'sub_sub_id' => 4,
                'coa_name' => 'Belanja Jasa Sewa Peralatan/Perlengkapan',
            ],
            65 => [
                'id' => '03',
                'type_id' => 5,
                'sub_id' => 2,
                'sub_sub_id' => 4,
                'coa_name' => 'Belanja Jasa Sewa Sarana Mobilitas',
            ],
            66 => [
                'id' => '90-99',
                'type_id' => 5,
                'sub_id' => 2,
                'sub_sub_id' => 4,
                'coa_name' => 'Belanja Jasa Sewa Lainnya',
            ],
            67 => [
                'id' => '01',
                'type_id' => 5,
                'sub_id' => 2,
                'sub_sub_id' => 5,
                'coa_name' => 'Belanja Jasa Langganan Listrik',
            ],
            68 => [
                'id' => '02',
                'type_id' => 5,
                'sub_id' => 2,
                'sub_sub_id' => 5,
                'coa_name' => 'Belanja Jasa Langganan Air Bersih',
            ],
            69 => [
                'id' => '03',
                'type_id' => 5,
                'sub_id' => 2,
                'sub_sub_id' => 5,
                'coa_name' => 'Belanja Jasa Langganan Majalah/Surat Kabar',
            ],
            70 => [
                'id' => '04',
                'type_id' => 5,
                'sub_id' => 2,
                'sub_sub_id' => 5,
                'coa_name' => 'Belanja Jasa Langganan Telepon',
            ],
            71 => [
                'id' => '05',
                'type_id' => 5,
                'sub_id' => 2,
                'sub_sub_id' => 5,
                'coa_name' => 'Belanja Jasa Langganan Internet',
            ],
            72 => [
                'id' => '06',
                'type_id' => 5,
                'sub_id' => 2,
                'sub_sub_id' => 5,
                'coa_name' => 'Belanja Jasa Kurir/Pos/Giro',
            ],
            73 => [
                'id' => '07',
                'type_id' => 5,
                'sub_id' => 2,
                'sub_sub_id' => 5,
                'coa_name' => 'Belanja Jasa Perpanjangan Ijin/Pajak',
            ],
            74 => [
                'id' => '90-99',
                'type_id' => 5,
                'sub_id' => 2,
                'sub_sub_id' => 5,
                'coa_name' => 'Belanja Operasional Perkantoran Lainnya',
            ],
            75 => [
                'id' => '01',
                'type_id' => 5,
                'sub_id' => 2,
                'sub_sub_id' => 6,
                'coa_name' => 'Belanja Pemeliharaan Mesin dan Peralatan Berat',
            ],
            76 => [
                'id' => '02',
                'type_id' => 5,
                'sub_id' => 2,
                'sub_sub_id' => 6,
                'coa_name' => 'Belanja Pemeliharaan Kendaraan Bermotor',
            ],
            77 => [
                'id' => '03',
                'type_id' => 5,
                'sub_id' => 2,
                'sub_sub_id' => 6,
                'coa_name' => 'Belanja Pemeliharaan Peralatan',
            ],
            78 => [
                'id' => '04',
                'type_id' => 5,
                'sub_id' => 2,
                'sub_sub_id' => 6,
                'coa_name' => 'Belanja Pemeliharaan Bangunan',
            ],
            79 => [
                'id' => '05',
                'type_id' => 5,
                'sub_id' => 2,
                'sub_sub_id' => 6,
                'coa_name' => 'Belanja Pemeliharaan Jalan',
            ],
            80 => [
                'id' => '06',
                'type_id' => 5,
                'sub_id' => 2,
                'sub_sub_id' => 6,
                'coa_name' => 'Belanja Pemeliharaan Jembatan',
            ],
            81 => [
                'id' => '07',
                'type_id' => 5,
                'sub_id' => 2,
                'sub_sub_id' => 6,
                'coa_name' => 'Belanja Pemeliharaan Irigasi/Saluran Sungai/Embung/Air Bersih, jaringan Air Limbah, Persampahan, dll)',
            ],
            82 => [
                'id' => '08',
                'type_id' => 5,
                'sub_id' => 2,
                'sub_sub_id' => 6,
                'coa_name' => 'Belanja Pemeliharaan Jaringan dan Instalasi (Listrik, Telepon, Internet, Komunikasi, dll)',
            ],
            83 => [
                'id' => '90-99',
                'type_id' => 5,
                'sub_id' => 2,
                'sub_sub_id' => 6,
                'coa_name' => 'Belanja Pemeliharaan Lainnya',
            ],
            84 => [
                'id' => '01',
                'type_id' => 5,
                'sub_id' => 2,
                'sub_sub_id' => 7,
                'coa_name' => 'Belanja Bahan Perlengkapan yang Diserahkan ke masyarakat',
            ],
            85 => [
                'id' => '02',
                'type_id' => 5,
                'sub_id' => 2,
                'sub_sub_id' => 7,
                'coa_name' => 'Belanja Bantuan Mesin/Kendaraaan bermotor/Peralatan yang diserahkan ke masyarakat',
            ],
            86 => [
                'id' => '03',
                'type_id' => 5,
                'sub_id' => 2,
                'sub_sub_id' => 7,
                'coa_name' => 'Belanja Bantuan Bangunan yang diserahkan ke masyarakat',
            ],
            87 => [
                'id' => '04',
                'type_id' => 5,
                'sub_id' => 2,
                'sub_sub_id' => 7,
                'coa_name' => 'Belanja Beasiswa Berprestasi/Masyarakat Miskin',
            ],
            88 => [
                'id' => '05',
                'type_id' => 5,
                'sub_id' => 2,
                'sub_sub_id' => 7,
                'coa_name' => 'Belanja Bantuan Bibit Tanaman/Hewan/Ikan',
            ],
            89 => [
                'id' => '90-99',
                'type_id' => 5,
                'sub_id' => 2,
                'sub_sub_id' => 7,
                'coa_name' => 'Belanja Barang dan Jasa yang Diserahkan kepada Masyarakat Lainnya',
            ],
            90 => [
                'id' => '01',
                'type_id' => 5,
                'sub_id' => 3,
                'sub_sub_id' => 1,
                'coa_name' => 'Belanja Modal Pembebasan/Pembelian Tanah',
            ],
            91 => [
                'id' => '02',
                'type_id' => 5,
                'sub_id' => 3,
                'sub_sub_id' => 1,
                'coa_name' => 'Belanja Modal Pembayaran Honorarium Tim Tanah',
            ],
            92 => [
                'id' => '03',
                'type_id' => 5,
                'sub_id' => 3,
                'sub_sub_id' => 1,
                'coa_name' => 'Belanja Modal Pengukuran dan Pembuatan Sertifikat Tanah',
            ],
            93 => [
                'id' => '04',
                'type_id' => 5,
                'sub_id' => 3,
                'sub_sub_id' => 1,
                'coa_name' => 'Belanja Modal Pengurukan dan Pematangan Tanah',
            ],
            94 => [
                'id' => '05',
                'type_id' => 5,
                'sub_id' => 3,
                'sub_sub_id' => 1,
                'coa_name' => 'Belanja Modal Perjalanan Pengadaan Tanah',
            ],
            95 => [
                'id' => '90-99',
                'type_id' => 5,
                'sub_id' => 3,
                'sub_sub_id' => 1,
                'coa_name' => 'Belanja Modal Pengadaan Tanah Lainnya',
            ],
            96 => [
                'id' => '01',
                'type_id' => 5,
                'sub_id' => 3,
                'sub_sub_id' => 2,
                'coa_name' => 'Belanja Modal Honor Tim yang Melaksanakan Kegiatan',
            ],
            97 => [
                'id' => '02',
                'type_id' => 5,
                'sub_id' => 3,
                'sub_sub_id' => 2,
                'coa_name' => 'Belanja Modal Peralatan Elektronik dan Alat Studio',
            ],
            98 => [
                'id' => '03',
                'type_id' => 5,
                'sub_id' => 3,
                'sub_sub_id' => 2,
                'coa_name' => 'Belanja Modal Peralatan Komputer',
            ],
            99 => [
                'id' => '04',
                'type_id' => 5,
                'sub_id' => 3,
                'sub_sub_id' => 2,
                'coa_name' => 'Belanja Modal Peralatan Mebeulair dan Aksesori Ruangan',
            ],
            100 => [
                'id' => '05',
                'type_id' => 5,
                'sub_id' => 3,
                'sub_sub_id' => 2,
                'coa_name' => 'Belanja Modal Peralatan Dapur',
            ],
            101 => [
                'id' => '06',
                'type_id' => 5,
                'sub_id' => 3,
                'sub_sub_id' => 2,
                'coa_name' => 'Belanja Modal Peralatan Alat Ukur/Rambu-rambu',
            ],
            102 => [
                'id' => '07',
                'type_id' => 5,
                'sub_id' => 3,
                'sub_sub_id' => 2,
                'coa_name' => 'Belanja Modal Peralatan Rambu-rambu/Patok Tanah',
            ],
            103 => [
                'id' => '08',
                'type_id' => 5,
                'sub_id' => 3,
                'sub_sub_id' => 2,
                'coa_name' => 'Belanja Modal Peralatan khusus Kesehatan',
            ],
            104 => [
                'id' => '09',
                'type_id' => 5,
                'sub_id' => 3,
                'sub_sub_id' => 2,
                'coa_name' => 'Belanja Modal Peralatan khusus Pertanian/Perikanan/Peternakan',
            ],
            105 => [
                'id' => '10',
                'type_id' => 5,
                'sub_id' => 3,
                'sub_sub_id' => 2,
                'coa_name' => 'Belanja Modal Mesin',
            ],
            106 => [
                'id' => '11',
                'type_id' => 5,
                'sub_id' => 3,
                'sub_sub_id' => 2,
                'coa_name' => 'Belanja Modal Pengadaan Alat-Alat Berat',
            ],
            107 => [
                'id' => '90-99',
                'type_id' => 5,
                'sub_id' => 3,
                'sub_sub_id' => 2,
                'coa_name' => 'Belanja Modal Peralatan, Mesin, dan Alat Berat Lainnya',
            ],
            108 => [
                'id' => '01',
                'type_id' => 5,
                'sub_id' => 3,
                'sub_sub_id' => 3,
                'coa_name' => 'Belanja Modal Honor Tim yang Melaksanakan Kegiatan',
            ],
            109 => [
                'id' => '02',
                'type_id' => 5,
                'sub_id' => 3,
                'sub_sub_id' => 3,
                'coa_name' => 'Belanja Modal Kendaraan Darat Bermotor',
            ],
            110 => [
                'id' => '03',
                'type_id' => 5,
                'sub_id' => 3,
                'sub_sub_id' => 3,
                'coa_name' => 'Belanja Modal Angkutan Darat Tidak Bermotor',
            ],
            111 => [
                'id' => '04',
                'type_id' => 5,
                'sub_id' => 3,
                'sub_sub_id' => 3,
                'coa_name' => 'Belanja Modal Kendaraan Air Bermotor',
            ],
            112 => [
                'id' => '05',
                'type_id' => 5,
                'sub_id' => 3,
                'sub_sub_id' => 3,
                'coa_name' => 'Belanja Modal Angkutan Air Tidak Bermotor',
            ],
            113 => [
                'id' => '90-99',
                'type_id' => 5,
                'sub_id' => 3,
                'sub_sub_id' => 3,
                'coa_name' => 'Belanja Modal Kendaraan Lainnya',
            ],
            114 => [
                'id' => '',
                'type_id' => 5,
                'sub_id' => 0,
                'sub_sub_id' => 0,
                'coa_name' => '',
            ],
            115 => [
                'id' => '1',
                'type_id' => 5,
                'sub_id' => 3,
                'sub_sub_id' => 4,
                'coa_name' => 'Belanja Modal Gedung dan Bangunan',
            ],
            116 => [
                'id' => '',
                'type_id' => 5,
                'sub_id' => 0,
                'sub_sub_id' => 0,
                'coa_name' => '',
            ],
            117 => [
                'id' => '01',
                'type_id' => 5,
                'sub_id' => 3,
                'sub_sub_id' => 4,
                'coa_name' => 'Belanja Modal Honor Tim yang Melaksanakan Kegiatan',
            ],
            118 => [
                'id' => '02',
                'type_id' => 5,
                'sub_id' => 3,
                'sub_sub_id' => 4,
                'coa_name' => 'Belanja Modal Upah Tenaga Kerja',
            ],
            119 => [
                'id' => '03',
                'type_id' => 5,
                'sub_id' => 3,
                'sub_sub_id' => 4,
                'coa_name' => 'Belanja Modal Bahan Baku ',
            ],
            120 => [
                'id' => '04',
                'type_id' => 5,
                'sub_id' => 3,
                'sub_sub_id' => 4,
                'coa_name' => 'Belanja Modal Sewa Peralatan  ',
            ],
            121 => [
                'id' => '01',
                'type_id' => 5,
                'sub_id' => 3,
                'sub_sub_id' => 5,
                'coa_name' => 'Belanja Modal Honor Tim yang Melaksanakan Kegiatan',
            ],
            122 => [
                'id' => '02',
                'type_id' => 5,
                'sub_id' => 3,
                'sub_sub_id' => 5,
                'coa_name' => 'Belanja Modal Upah Tenaga Kerja',
            ],
            123 => [
                'id' => '03',
                'type_id' => 5,
                'sub_id' => 3,
                'sub_sub_id' => 5,
                'coa_name' => 'Belanja Modal Bahan Baku ',
            ],
            124 => [
                'id' => '04',
                'type_id' => 5,
                'sub_id' => 3,
                'sub_sub_id' => 5,
                'coa_name' => 'Belanja Modal Sewa Peralatan  ',
            ],
            125 => [
                'id' => '01',
                'type_id' => 5,
                'sub_id' => 3,
                'sub_sub_id' => 6,
                'coa_name' => 'Belanja Modal Honor Tim yang Melaksanakan Kegiatan',
            ],
            126 => [
                'id' => '02',
                'type_id' => 5,
                'sub_id' => 3,
                'sub_sub_id' => 6,
                'coa_name' => 'Belanja Modal Upah Tenaga Kerja',
            ],
            127 => [
                'id' => '03',
                'type_id' => 5,
                'sub_id' => 3,
                'sub_sub_id' => 6,
                'coa_name' => 'Belanja Modal Bahan Baku ',
            ],
            128 => [
                'id' => '04',
                'type_id' => 5,
                'sub_id' => 3,
                'sub_sub_id' => 6,
                'coa_name' => 'Belanja Modal Sewa Peralatan  ',
            ],
            129 => [
                'id' => '01',
                'type_id' => 5,
                'sub_id' => 3,
                'sub_sub_id' => 7,
                'coa_name' => 'Belanja Modal Honor Tim yang Melaksanakan Kegiatan',
            ],
            130 => [
                'id' => '02',
                'type_id' => 5,
                'sub_id' => 3,
                'sub_sub_id' => 7,
                'coa_name' => 'Belanja Modal Upah Tenaga Kerja',
            ],
            131 => [
                'id' => '03',
                'type_id' => 5,
                'sub_id' => 3,
                'sub_sub_id' => 7,
                'coa_name' => 'Belanja Modal Bahan Baku ',
            ],
            132 => [
                'id' => '04',
                'type_id' => 5,
                'sub_id' => 3,
                'sub_sub_id' => 7,
                'coa_name' => 'Belanja Modal Sewa Peralatan  ',
            ],
            133 => [
                'id' => '01',
                'type_id' => 5,
                'sub_id' => 3,
                'sub_sub_id' => 8,
                'coa_name' => 'Belanja Modal Honor Tim yang Melaksanakan Kegiatan',
            ],
            134 => [
                'id' => '02',
                'type_id' => 5,
                'sub_id' => 3,
                'sub_sub_id' => 8,
                'coa_name' => 'Belanja Modal Upah Tenaga Kerja',
            ],
            135 => [
                'id' => '03',
                'type_id' => 5,
                'sub_id' => 3,
                'sub_sub_id' => 8,
                'coa_name' => 'Belanja Modal Bahan Baku ',
            ],
            136 => [
                'id' => '04',
                'type_id' => 5,
                'sub_id' => 3,
                'sub_sub_id' => 8,
                'coa_name' => 'Belanja Modal Sewa Peralatan  ',
            ],
            137 => [
                'id' => '01',
                'type_id' => 5,
                'sub_id' => 3,
                'sub_sub_id' => 9,
                'coa_name' => 'Belanja Modal khusus Pendidikan dan Perpustakaan',
            ],
            138 => [
                'id' => '02',
                'type_id' => 5,
                'sub_id' => 3,
                'sub_sub_id' => 9,
                'coa_name' => 'Belanja Modal khusus Olahraga',
            ],
            139 => [
                'id' => '03',
                'type_id' => 5,
                'sub_id' => 3,
                'sub_sub_id' => 9,
                'coa_name' => 'Belanja Modal khusus Kesenian/Kebudayaan/keagamaan',
            ],
            140 => [
                'id' => '04',
                'type_id' => 5,
                'sub_id' => 3,
                'sub_sub_id' => 9,
                'coa_name' => 'Belanja Modal Tumbuhan/Tanaman',
            ],
            141 => [
                'id' => '05',
                'type_id' => 5,
                'sub_id' => 3,
                'sub_sub_id' => 9,
                'coa_name' => 'Belanja Modal Hewan',
            ],
            142 => [
                'id' => '90-99',
                'type_id' => 5,
                'sub_id' => 3,
                'sub_sub_id' => 9,
                'coa_name' => 'Belanja Modal Lainnya',
            ],
            143 => [
                'id' => '01',
                'type_id' => 5,
                'sub_id' => 4,
                'sub_sub_id' => 1,
                'coa_name' => 'Belanja Tak Terduga',
            ],
            144 => [
                'id' => '01',
                'type_id' => 6,
                'sub_id' => 1,
                'sub_sub_id' => 1,
                'coa_name' => 'SILPA Tahun Sebelumnya',
            ],
            145 => [
                'id' => '01',
                'type_id' => 6,
                'sub_id' => 1,
                'sub_sub_id' => 2,
                'coa_name' => 'Pencairan Dana Cadangan',
            ],
            146 => [
                'id' => '01',
                'type_id' => 6,
                'sub_id' => 1,
                'sub_sub_id' => 3,
                'coa_name' => 'Hasil Penjualan Kekayaan Desa yang Dipisahkan',
            ],
            147 => [
                'id' => '90-99',
                'type_id' => 6,
                'sub_id' => 1,
                'sub_sub_id' => 9,
                'coa_name' => 'Penerimaan Pembiayaan Lainnya',
            ],
            148 => [
                'id' => '01',
                'type_id' => 6,
                'sub_id' => 2,
                'sub_sub_id' => 1,
                'coa_name' => 'Pembentukan Dana Cadangan',
            ],
            149 => [
                'id' => '01',
                'type_id' => 6,
                'sub_id' => 2,
                'sub_sub_id' => 2,
                'coa_name' => 'Penyertaan Modal Desa',
            ],
            150 => [
                'id' => '90-99',
                'type_id' => 6,
                'sub_id' => 2,
                'sub_sub_id' => 9,
                'coa_name' => 'Pengeluaran Pembiayaan lainnya',
            ],
        ]);
    }
}

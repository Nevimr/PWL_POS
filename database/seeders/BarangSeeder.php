<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'barang_id' => 1,
                'kategori_id' => 1,
                'barang_kode' => 'CFW',
                'barang_nama' => 'Citra Fresh White 70gr',
                'harga_beli' => 4000,
                'harga_jual' => 4500,
                'created_at' => now(),
            ],
            [
                'barang_id' => 2,
                'kategori_id' => 2,
                'barang_kode' => 'CSCSMM',
                'barang_nama' => 'Clear Sampo Cool Sport Mentol Men 9ml',
                'harga_beli' => 500,
                'harga_jual' => 1000,
                'created_at' => now(),
            ],
            [
                'barang_id' => 3,
                'kategori_id' => 2,
                'barang_kode' => 'CSLF',
                'barang_nama' => 'Clear Sampo Lemon Fresh 9ml',
                'harga_beli' => 500,
                'harga_jual' => 1000,
                'created_at' => now(),
            ],
            [
                'barang_id' => 4,
                'kategori_id' => 3,
                'barang_kode' => 'CUG',
                'barang_nama' => 'Close Up Green 160gr',
                'harga_beli' => 13500,
                'harga_jual' => 15000,
                'created_at' => now(),
            ],
            [
                'barang_id' => 5,
                'kategori_id' => 1,
                'barang_kode' => 'LCF',
                'barang_nama' => 'Lifeboy Coolfresh 250ml',
                'harga_beli' => 13500,
                'harga_jual' => 14500,
                'created_at' => now(),
            ],
            [
                'barang_id' => 6,
                'kategori_id' => 1,
                'barang_kode' => 'LMC',
                'barang_nama' => 'Lifeboy Mildcare 450ml',
                'harga_beli' => 23000,
                'harga_jual' => 24500,
                'created_at' => now(),
            ],
            [
                'barang_id' => 7,
                'kategori_id' => 2,
                'barang_kode' => 'LSAK',
                'barang_nama' => 'Lifeboy Sampo Anti Ketombe 9ml',
                'harga_beli' => 500,
                'harga_jual' => 1000,
                'created_at' => now(),
            ],
            [
                'barang_id' => 8,
                'kategori_id' => 2,
                'barang_kode' => 'LSBS',
                'barang_nama' => 'Lifeboy Sampo Black Shine 9ml',
                'harga_beli' => 500,
                'harga_jual' => 1000,
                'created_at' => now(),
            ],
            [
                'barang_id' => 9,
                'kategori_id' => 2,
                'barang_kode' => 'DSDC',
                'barang_nama' => 'Dove Sampo Dandruff Care 9ml',
                'harga_beli' => 500,
                'harga_jual' => 1000,
                'created_at' => now(),
            ],
            [
                'barang_id' => 10,
                'kategori_id' => 4,
                'barang_kode' => 'BMS',
                'barang_nama' => 'Bango Manis 275ml',
                'harga_beli' => 17500,
                'harga_jual' => 18000,
                'created_at' => now(),
            ],
        ];
        DB::table('m_barang')->insert($data);
    }
}

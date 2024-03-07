<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'penjualan_id' => 1,
                'user_id' => 3,
                'pembeli' => 'Natasha Romanoff',
                'penjualan_kode' => 'SK01',
                'penjualan_tanggal' => '2024-03-10 20:30',
                'created_at' => now(),
            ],
            [
                'penjualan_id' => 2,
                'user_id' => 3,
                'pembeli' => 'Steve Rogers',
                'penjualan_kode' => 'SK02',
                'penjualan_tanggal' => '2024-03-10 20:30',
                'created_at' => now(),
            ],
            [
                'penjualan_id' => 3,
                'user_id' => 3,
                'pembeli' => 'Scott Lang',
                'penjualan_kode' => 'SK03',
                'penjualan_tanggal' => '2024-03-10 20:30',
                'created_at' => now(),
            ],
            [
                'penjualan_id' => 4,
                'user_id' => 3,
                'pembeli' => 'Captain Marvel',
                'penjualan_kode' => 'SK04',
                'penjualan_tanggal' => '2024-03-10 20:30',
                'created_at' => now(),
            ],
            [
                'penjualan_id' => 5,
                'user_id' => 3,
                'pembeli' => 'Doctor Strange',
                'penjualan_kode' => 'SK05',
                'penjualan_tanggal' => '2024-03-10 20:30',
                'created_at' => now(),
            ],
            [
                'penjualan_id' => 6,
                'user_id' => 3,
                'pembeli' => 'Bruce Banner',
                'penjualan_kode' => 'SK06',
                'penjualan_tanggal' => '2024-03-10 20:30',
                'created_at' => now(),
            ],
            [
                'penjualan_id' => 7,
                'user_id' => 3,
                'pembeli' => 'Tony Stark',
                'penjualan_kode' => 'SK07',
                'penjualan_tanggal' => '2024-03-10 20:30',
                'created_at' => now(),
            ],
            [
                'penjualan_id' => 8,
                'user_id' => 3,
                'pembeli' => 'Wanda Maximoff',
                'penjualan_kode' => 'SK08',
                'penjualan_tanggal' => '2024-03-10 20:30',
                'created_at' => now(),
            ],
            [
                'penjualan_id' => 9,
                'user_id' => 3,
                'pembeli' => 'James Rhodes',
                'penjualan_kode' => 'SK09',
                'penjualan_tanggal' => '2024-03-10 20:30',
                'created_at' => now(),
            ],
            [
                'penjualan_id' => 10,
                'user_id' => 3,
                'pembeli' => 'Peter Parker',
                'penjualan_kode' => 'SK10',
                'penjualan_tanggal' => '2024-03-10 20:30',
                'created_at' => now(),
            ],
        ];
        DB::table('t_penjualan')->insert($data);
    }
}

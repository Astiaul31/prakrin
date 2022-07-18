<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barang = [
            [
                'nama_barang' => 'Sepatu Kece',
                'harga' => 1500000,
                'stok' => 100,
                'nama_supplier' => 'Hanzzt'
            ],
            [
                'nama_barang' => 'Baju Keren',
                'harga' => 230000,
                'stok' => 150,
                'nama_supplier' => 'Hanzzt'
            ],
            [
                'nama_barang' => 'Celana Wow',
                'harga' => 700000,
                'stok' => 70,
                'nama_supplier' => 'Hanzzt'
            ],
            [
                'nama_barang' => 'Jacket Edan',
                'harga' => 1500000,
                'stok' => 100,
                'nama_supplier' => 'Hanzzt'
            ],
            [
                'nama_barang' => 'Hoodie Bagus',
                'harga' => 1500000,
                'stok' => 100,
                'nama_supplier' => 'Hanzzt'
            ],
        ];
        DB::table('barangs')->insert($barang);
    }
}
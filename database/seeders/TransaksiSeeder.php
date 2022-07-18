<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class TransaksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $transaksi = [
            [
                'nama_barang' => 'Sepatu Kece',
                'nama_pembeli' => 'Dida',
                'tanggal' => '2022-07-12',
                'keterangan' => 'Sukses'
            ],
            [
                'nama_barang' => 'Baju Keren',
                'nama_pembeli' => 'Gilang',
                'tanggal' => '2022-02-10',
                'keterangan' => 'Sukses'
            ],
            [
                'nama_barang' => 'Celana Wow',
                'nama_pembeli' => 'Nana',
                'tanggal' => '2022-05-09',
                'keterangan' => 'Sukses'
            ],
            [
                'nama_barang' => 'Jacket Edan',
                'nama_pembeli' => 'Alfian',
                'tanggal' => '2022-11-11',
                'keterangan' => 'Gagal'
            ],
             [
                'nama_barang' => 'Hoodie Bagus',
                'nama_pembeli' => 'Haha',
                'tanggal' => '2022-06-22',
                'keterangan' => 'Sukses'
            ],
        ];
        DB::table('transaksis')->insert($transaksi);
    }
}
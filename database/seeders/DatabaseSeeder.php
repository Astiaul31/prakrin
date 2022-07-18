<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(
            [
                JurusanSeeder::class, SiswaSeeder::class, GuruSeeder::class,
                // Tugas Baru
                BarangSeeder::class,
                PembeliSeeder::class,
                SupplierSeeder::class,
                PembayaranSeeder::class,
                TransaksiSeeder::class
            ]
        );
    }
}
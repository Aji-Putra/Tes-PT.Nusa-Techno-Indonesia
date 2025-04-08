<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Produk;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Produk::create([
            'nama' => 'Produk Contoh',
            'deskripsi' => 'Deskripsi produk',
            'harga' => 50000,
            'stok' => 10,
        ]);
    }
}

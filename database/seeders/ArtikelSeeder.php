<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Artikel;

class ArtikelSeeder extends Seeder
{
    public function run(): void
    {
        Artikel::create([
            'judul' => '123',
            'isi' => '78',
            'detil' => 'ABCDLOVE',
        ]);

        Artikel::create([
            'judul' => 'Nice',
            'isi' => 'Guy',
            'detil' => 'Dont be such a wuss Seoul is mine tonight!',
        ]);

        Artikel::create([
            'judul' => 'Talk',
            'isi' => 'That Talk',
            'detil' => 'L-O-V-E',
        ]);
    }
}

<?php

namespace Database\Seeders;

// use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\admin;
use App\Models\siswa;
use App\Models\guru;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        Admin::factory()->create([
            'username' => 'admin',
            'password' => bcrypt('admin'),
            'role' => 'admin'
        ]);

        Admin::factory()->create([
            'username' => 'user1',
            'password' => bcrypt('user123'),
            'role' => 'user'
        ]);

        Siswa::factory()->count(10)->create();

        $this->call(ArtikelSeeder::class);

        siswa::factory()->count(15)->create();
        guru::factory()->count(5)->create();
    }
}

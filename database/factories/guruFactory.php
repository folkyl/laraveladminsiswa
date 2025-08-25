<?php

namespace Database\Factories;

use App\Models\guru;
use App\Models\admin;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\guru>
 */
class GuruFactory extends Factory
{
    protected $model = guru::class;

    public function definition(): array
    {
        return [
            'id' => admin::factory()->create(['role' => 'guru'])->id,
            'nama' => $this->faker->name(),
            'mapel' => $this->faker->randomElement(['Matematika', 'IPAS', 'Bahasa Indonesia', 'Informatika']),
            'password' => Hash::make('guru')
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\siswa>
 */
class SiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama' => fake()->name(),
            'umur' => fake()->numberBetween(20, 30),
            'jurusan' => fake()->randomElement([
                'teknik keg. komputer', 'teknik informatika', 'farmasi', 'pertanian', 'teknik elektro'
            ]),
            'status' => fake()->randomElement(['aktif', 'non aktif']),
            'nilai' => fake()->numberBetween(80, 100)
        ];
    }
}
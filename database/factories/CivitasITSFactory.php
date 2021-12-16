<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CivitasITSFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'NIM/NRP/NIP' => $this->faker->uuid(),
            'nama_depan' => $this->faker->firstName(),
            'nama_belakang' => $this->faker->lastName(),
            'email' => preg_replace('/@example\..*/', '@smallits.com', $this->faker->unique()->safeEmail),
            'no_telp' => $this->faker->phoneNumber(),
            'tgl_lahir' => Carbon::parse('2000-01-01'),
            'jenis_kelamin' => $this->faker->randomElement(['Pria', 'Wanita'])
        ];
    }
}

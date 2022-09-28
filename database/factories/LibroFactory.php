<?php

namespace Database\Factories;

use App\Models\Libro;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class LibroFactory extends Factory
{
    protected $model = Libro::class;

    public function definition()
    {
        return [
			'isbn' => $this->faker->name,
			'titulo' => $this->faker->name,
			'numero_paginas' => $this->faker->name,
			'descripcion' => $this->faker->name,
			'portada' => $this->faker->name,
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "category_id" => rand(1, 4),
            "name" => [
                "en" => fake()->sentence(3),
                "ru" => "Комплекты спальной мебели"
            ],
            "price" => rand(50000, 1000000),
            "description" => [
                "en" => fake()->paragraph(5),
                "ru" => "Матрасы. Беспружинные матрасы отличаются лёгкостью и долгим сроком службы.
                При выборе пружинного матраса рекомендуется отдавать предпочтение вариантам с независимыми друг от друга пружинами."
            ]
        ];
    }
}

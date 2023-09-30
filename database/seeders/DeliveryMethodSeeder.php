<?php

namespace Database\Seeders;

use App\Models\DeliveryMethod;
use Illuminate\Database\Seeder;

class DeliveryMethodSeeder extends Seeder
{

    public function run(): void
    {
        DeliveryMethod::create([
            "name" => [
                "en" => "Free",
                "ru" => "Бесплатно",
            ],
            "estimated_time" => [
                "en" => "5 days",
                "ru" => "5 дней",
            ],
            "sum" => 0,
        ]);

        DeliveryMethod::create([
            "name" => [
                "en" => "Standard",
                "ru" => "Стандарт",
            ],
            "estimated_time" => [
                "en" => "3 days",
                "ru" => "3 дней",
            ],
            "sum" => 40000,
        ]);

        DeliveryMethod::create([
            "name" => [
                "en" => "Fast",
                "ru" => "Быстрый",
            ],
            "estimated_time" => [
                "en" => "1 days",
                "ru" => "1 дней",
            ],
            "sum" => 80000,
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\Attribute;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AttributeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Attribute::create([
            "name" => [
                "en" => "color",
                "ru" => "цвет",
            ]
        ]);

        Attribute::create([
            "name" => [
                "en" => "material",
                "ru" => "материал",
            ]
        ]);

        Attribute::create([
            "name" => [
                "en" => "size",
                "ru" => "размер",
            ]
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            "name" => [
                "en" => "Chair",
                "ru" => "стул",
            ],
        ]);
        Category::create([
            "name" => [
                "en" => "Table",
                "ru" => "стол",
            ],
        ]);
        Category::create([
            "name" => [
                "en" => "Armchair",
                "ru" => "кресло",
            ],
        ]);
        Category::create([
            "name" => [
                "en" => "Bed",
                "ru" => "кровать",
            ],
        ]);

    }
}

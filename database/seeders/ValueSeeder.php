<?php

namespace Database\Seeders;

use App\Models\Value;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ValueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Value::create([
           "attribute_id" => 1,
           "name" => [
               "en" => "red",
               "ru" => "красный",
           ]
        ]);

        Value::create([
            "attribute_id" => 1,
            "name" => [
                "en" => "black",
                "ru" => "черный",
            ]
        ]);

        Value::create([
            "attribute_id" => 1,
            "name" => [
                "en" => "brown",
                "ru" => "коричневый",
            ]
        ]);


        Value::create([
            "attribute_id" => 2,
            "name" => [
                "en" => "MDF",
                "ru" => "коричневый",
            ]
        ]);

        Value::create([
            "attribute_id" => 2,
            "name" => [
                "en" => "LDSP",
                "ru" => "ЛДСП",
            ]
        ]);
    }
}

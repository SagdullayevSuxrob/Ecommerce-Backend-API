<?php

namespace Database\Seeders;

use App\Models\Value;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ValueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Value::create([
            "attribute_id" => 1,
            "name" => [
                'uz' => "Qizil",
                "en" => "Red",
            ]
        ]);

        Value::create([
            "attribute_id" => 1,
            "name" => [
                'uz' => "Qora",
                "en" => "Black",
            ]
        ]);

        Value::create([
            "attribute_id" => 1,
            "name" => [
                'uz' => "Jigarrang",
                "en" => "Brown",
            ]
        ]);


        Value::create([
            "attribute_id" => 2,
            "name" => [
                "uz" => "LDSP",
                "en" => "LDSP"
            ]
        ]);

        Value::create([
            "attribute_id" => 2,
            "name" => [
                "uz" => "MDF",
                "en" => "MDF"
            ]
        ]);

        Value::create([
            "attribute_id" => 3,
            "name" => [
                "uz" => "Katta",
                "en" => "Big",
            ]
        ]);

        Value::create([
            "attribute_id" => 3,
            "name" => [
                "uz" => "O'rtacha",
                "en" => "Big",
            ]
        ]);

        Value::create([
            "attribute_id" => 3,
            "name" => [
                "uz" => "Kichik",
                "en" => "Small",
            ]
        ]);
    }
}

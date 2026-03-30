<?php

namespace Database\Seeders;

use App\Models\Attribute;
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
        $attribute = Attribute::find(1);

        $attribute->values()->create([
            "name" => [
                'uz' => "Qizil",
                "en" => "Red",
            ]
        ]);

        $attribute->values()->create([
            "name" => [
                'uz' => "Qora",
                "en" => "Black",
            ]
        ]);

        $attribute->values()->create([
            "name" => [
                'uz' => "Jigarrang",
                "en" => "Brown",
            ]
        ]);
        

        $attribute = Attribute::find(2);

        $attribute->values()->create([
            "name" => [
                "uz" => "LDSP",
                "en" => "LDSP"
            ]
        ]);

        $attribute->values()->create([
            "name" => [
                "uz" => "MDF",
                "en" => "MDF"
            ]
        ]);


        $attribute = Attribute::find(3);

        $attribute->values()->create([
            "name" => [
                "uz" => "Katta",
                "en" => "Big",
            ]
        ]);

        $attribute->values()->create([
            "name" => [
                "uz" => "O'rtacha",
                "en" => "Big",
            ]
        ]);

        $attribute->values()->create([
            "name" => [
                "uz" => "Kichik",
                "en" => "Small",
            ]
        ]);
    }
}

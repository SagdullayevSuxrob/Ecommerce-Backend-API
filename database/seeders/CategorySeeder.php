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
    public function run()
    {
        Category::create([
            "name" => [
                'uz' => 'Stol',
                'en' => 'Table'
            ],
        ]);


        Category::create([
            "name" => [
                'uz' => 'Divan',
                'en' => 'Sofa'
            ]
        ]);

        $category = Category::create([
            "name" => [
                'uz' => 'Kreslo',
                'en' => 'Armchair'
            ]
        ]);

        $childCategory = $category->childCategories()->create([
            "name" => [
                'uz' => 'Ofis uchun',
                'en' => 'Office'
            ],
        ]);

        $childCategory->childCategories()->create([
            "name" => [
                'uz' => 'Erkaklar uchun',
                'en' => 'Men'
            ],
        ]);

        $childCategory->childCategories()->create([
            "name" => [
                'uz' => 'Ayollar uchun',
                'en' => 'Women'
            ],
        ]);



        $childCategory = $category->childCategories()->create([
            "name" => [
                'uz' => 'O\'yin uchun',
                'en' => 'Gaming'
            ],
        ]);

        $childCategory->childCategories()->create([
            "name" => [
                'uz' => 'Bolalar uchun',
                'en' => 'for Boys'
            ],
        ]);

        $childCategory->childCategories()->create([
            "name" => [
                'uz' => 'Qizlar uchun',
                'en' => 'for Girls'
            ],
        ]);



        Category::create([
            "name" => [
                'uz' => 'Yotoq',
                'en' => 'Bed'
            ]
        ]);

        Category::create([
            "name" => [
                'uz' => 'Stul',
                'en' => 'Chair'
            ]
        ]);
    }
}

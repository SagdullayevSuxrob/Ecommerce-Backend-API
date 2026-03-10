<?php

namespace Database\Seeders;

use App\Models\DeliveryMethod;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DeliveryMethodSeeder extends Seeder
{
    public function run()
    {
        DeliveryMethod::create([
            'name' => [
                'uz' => 'Bepul',
                'en' => 'Free'
            ],

            'estimated_time' => [
                'uz' => '10 kun',
                'en' => '10 day'
            ],

            'sum' => 0,
        ]);


        DeliveryMethod::create([
            'name' => [
                'uz' => 'Standart',
                'en' => 'Standart'
            ],

            'estimated_time' => [
                'uz' => '5 kun',
                'en' => '5 day'
            ],

            'sum' => 40000,
        ]);


        DeliveryMethod::create([
            'name' => [
                'uz' => 'Tez',
                'en' => 'Speedly'
            ],

            'estimated_time' => [
                'uz' => '2 kun',
                'en' => '2 day'
            ],

            'sum' => 80000,
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\PaymentType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaymentTypeSeeder extends Seeder
{
    public function run()
    {
        PaymentType::create([
            'name' => [
                'uz' => "Naqdda",
                'en' => "in Cash"
            ]
        ]);

        PaymentType::create([
            'name' => [
                'uz' => "Terminal orqali",
                'en' => "by Terminal"
            ]
        ]);

        PaymentType::create([
            'name' => [
                'uz' => "Click",
                'en' => "by Click"
            ]
        ]);


        PaymentType::create([
            'name' => [
                'uz' => "PayMe",
                'en' => "by PayMe"
            ]
        ]);

        PaymentType::create([
            'name' => [
                'uz' => "Uzum",
                'en' => "by Uzum"
            ]
        ]);
    }
}

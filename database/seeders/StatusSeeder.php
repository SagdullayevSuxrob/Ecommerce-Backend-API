<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    public function run()
    {
        Status::create([
            "name" => [
                'uz' => "Yangi",
                "en" => "New"
            ],

            "code" => "new",
            "for" => "order"
        ]);

        Status::create([
            "name" => [
                'uz' => "Tasdiqlandi",
                "en" => "Confirmed"
            ],

            "code" => "confirmed",
            "for" => "order"
        ]);

        Status::create([
            "name" => [
                'uz' => "Jarayonda",
                "en" => "Processing"
            ],

            "code" => "processing",
            "for" => "order"
        ]);

        Status::create([
            "name" => [
                'uz' => "Jo'natildi",
                "en" => "Shipped"
            ],

            "code" => "shipped",
            "for" => "order"
        ]);

        Status::create([
            "name" => [
                'uz' => "Yetkazib berildi",
                "en" => "Delivered"
            ],

            "code" => "delivered",
            "for" => "order"
        ]);

        Status::create([
            "name" => [
                'uz' => "Tugallandi",
                "en" => "Completed"
            ],

            "code" => "completed",
            "for" => "order"
        ]);

        Status::create([
            "name" => [
                'uz' => "Yopildi",
                "en" => "Closed"
            ],

            "code" => "closed",
            "for" => "order"
        ]);

        Status::create([
            "name" => [
                'uz' => "Bekor qilindi",
                "en" => "Canceled"
            ],

            "code" => "canceled",
            "for" => "order"
        ]);

        Status::create([
            "name" => [
                'uz' => "Qaytarib berildi",
                "en" => "Refunded"
            ],

            "code" => "refunded",
            "for" => "order"
        ]);

        Status::create([
            "name" => [
                'uz' => "To'lov kutilmoqda",
                "en" => "Payment waiting"
            ],

            "code" => "waiting_payment",
            "for" => "order"
        ]);

        Status::create([
            "name" => [
                'uz' => "To'lov qilindi",
                "en" => "Paid"
            ],

            "code" => "paid",
            "for" => "order"
        ]);

        Status::create([
            "name" => [
                'uz' => "To'lovda Xatolik",
                "en" => "Payment Error"
            ],

            "code" => "payment_error",
            "for" => "order"
        ]);
    }
}

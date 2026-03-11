<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserAddressSeeder extends Seeder
{
    public function run()
    {
        User::find(2)->addresses()->create([
            "latitude" => "123.234562",
            "longitude" => "21.300400",
            "region" => "Tashkent",
            "district" => "Sergeli district",
            "street" => "YangiHayat",
            "home" => "48"
        ]);

        User::find(2)->addresses()->create([
            "latitude" => "17.234562",
            "longitude" => "241.300400",
            "region" => "Samarkand",
            "district" => "Ishtykhan district",
            "street" => "Chimkurgan mahallah, Mustakillik st",
            "home" => "20"
        ]);
    }
}

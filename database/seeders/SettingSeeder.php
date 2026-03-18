<?php

namespace Database\Seeders;

use App\Enums\SettingType;
use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $setting = Setting::create([
            'name' => [
                'uz' => 'Til',
                'en' => 'Language'
            ],
            'type' => SettingType::SELECT->value,
        ]);

        $setting->values()->create([
            'name' => [
                'uz' => "O'zbekcha",
                'en' => "Uzbek"
            ]
        ]);

        $setting->values()->create([
            'name' => [
                'uz' => "Inglizcha",
                'en' => "English"
            ]
        ]);


        $setting = Setting::create([
            'name' => [
                'uz' => 'Pul Birligi',
                'en' => 'Currency'
            ],
            'type' => SettingType::SELECT->value,
        ]);

        $setting->values()->create([
            'name' => [
                'uz' => "so'm",
                'en' => "sum"
            ]
        ]);

        $setting->values()->create([
            'name' => [
                'uz' => "dollar",
                'en' => "dollar"
            ]
        ]);

        $setting = Setting::create([
            'name' => [
                'uz' => "Qorong'i rejim",
                'en' => 'Dark Mode'
            ],
            'type' => SettingType::SWITCH->value,
        ]);

        $setting = Setting::create([
            'name' => [
                'uz' => "Bildirishnomalar",
                'en' => 'Notifications'
            ],
            'type' => SettingType::SWITCH->value,
        ]);
    }
}

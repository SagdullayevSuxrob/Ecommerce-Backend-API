<?php

namespace Database\Seeders;

use App\Models\Attribute;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AttributeSeeder extends Seeder
{
    public function run()
    {
        Attribute::create(['name' => "material"]);
        Attribute::create(['name' => "color"]);
        Attribute::create(['name' => "size"]);
    }
}

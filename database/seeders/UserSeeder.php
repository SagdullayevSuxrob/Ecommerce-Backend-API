<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $admin = User::create([
            'first_name' => "Sukhrob",
            'last_name' => "Sagdullayev",
            'email' => "gmail@sukhrob.com",
            'phone' => "+998884065079",
            'password' => Hash::make('secret'),
        ]);
        $admin->roles()->attach(1);

        User::factory()->count(10)->hasAttached(Role::find(2))->create();
    }
}

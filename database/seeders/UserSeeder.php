<?php

namespace Database\Seeders;

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
        //--------------------------<= = ADMIN = =>--------------------------\\
        $user = User::create([
            'first_name' => "Sukhrob",
            'last_name' => "Sagdullayev",
            'email' => "gmail@sukhrob.com",
            'phone' => "+998884065079",
            'password' => Hash::make('secret'),
        ]);
        $user->assignRole('admin');

        //--------------------------<= = EDITOR = =>--------------------------\\

        $user = User::create([
            'first_name' => "Malika",
            'last_name' => "Sagdullayeva",
            'email' => "gmail@malika.com",
            'phone' => "+99877777777",
            'password' => Hash::make('secret'),
        ]);
        $user->assignRole('editor');

        //--------------------------<= = CUSTOMER = =>--------------------------\\

        $user = User::create([
            'first_name' => "Sarvar",
            'last_name' => "Sagdullayev",
            'email' => "gmail@server.com",
            'phone' => "+998888888888",
            'password' => Hash::make('secret'),
        ]);
        $user->assignRole('customer');

        //--------------------------<= = SHOP MANAGER = =>--------------------------\\


        $user = User::create([
            'first_name' => "Sunnat",
            'last_name' => "Sagdullayev",
            'email' => "gmail@sunnat.com",
            'phone' => "+1(216)699-33-29",
            'password' => Hash::make('secret'),
        ]);
        $user->assignRole('shop-manager');

        //--------------------------<= = CALL-CENTER SUPPORT = =>--------------------------\\

        $user = User::create([
            'first_name' => "Sevinch",
            'last_name' => "Sagdullayeva",
            'email' => "gmail@sevinch.com",
            'phone' => "+998937099808",
            'password' => Hash::make('secret'),
        ]);
        $user->assignRole('helpdesk-support');

        //--------------------------<= = FAKE USERS - CUSTOMER = =>--------------------------\\

        $users = User::factory()->count(10)->create();

        foreach ($users as $user) {
            $user->assignRole('customer');
        }
    }
}

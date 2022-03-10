<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'testuser',
            'email' => 'test@sample.com',
            'tel' => '09000000000',
            'email_verified_at' => '2022-03-01',
            'password' => Hash::make('password'),
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'role_id'   => 1,
            'email'     => 'admin@email.com',
            'password'  => Hash::make('pass'),
            'username'  => 'admin',
            'number'    => 101110,
            'firstname' => 'John',
            'lastname'  => 'Doe',
            'is_active' => 1,
            'api_token' => Str::random(128)
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'=>'Administrator',
            'email'=>'administrator@arbell.com.ar',
            'password'=>'123456789',
            'phone'=>'',
            'profile_id'=>'1'
        ]);
    }
}

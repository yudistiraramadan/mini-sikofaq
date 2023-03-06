<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
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
            'id' => '1',
            'role_id' => '1',
            'name' => 'Sri Noviana Mukti',
            'email' => 'ana@gmail.com',
            'password' => Hash::make('tes'),
        ]);
        User::create([
            'id' => '2',
            'role_id' => '2',
            'name' => 'Yudistira Ramadan Kalimasada',
            'email' => 'yudis@gmail.com',
            'password' => Hash::make('tes'),
        ]);
    }
}

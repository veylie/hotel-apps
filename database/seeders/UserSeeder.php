<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //insert into user
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => 12345678
        ]);
        // for ($i = 1; $i <= 5000; $i++) {
        //     User::create([
        //         'name' => 'Admin' . $i,
        //         'email' => 'admin' . $i . '@gmail.com',
        //         'password' => '12345678', // otomatis di-hash karena casts
        //     ]);
        // }
    }
}

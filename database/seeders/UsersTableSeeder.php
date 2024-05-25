<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'username'    => Str::random(10),
            'email'    => Str::random(10) . '@radenraflyy.com',
            'password'    => bcrypt('secret')
        ]);
    }
}

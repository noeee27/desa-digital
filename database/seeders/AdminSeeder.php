<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            [
                'email' => 'Kim@pulekulon.com',
            ],
            [
                'name' => 'Administrator Desa',
                'password' => Hash::make('pulekulon123'),
            ]
        );
    }
}
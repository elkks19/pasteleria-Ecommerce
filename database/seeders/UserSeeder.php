<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Rafael Fabiani',
            'email' => 'rafafabiani1909@gmail.com',
            'password' => Hash::make('asdf1234')
        ])->syncRoles('superadmin');

        User::create([
            'name' => 'Prueba',
            'email' => 'prueba@prueba.com',
            'password' => Hash::make('asdf1234')
        ])->syncRoles('vendedor');
    }
}

<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeed extends Seeder
{
        /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'nivel' => 'admin',
            'nome' => 'Admin',
            'email' => 'admin@gmail.com',
            'senha' => Hash::make('a')
        ]);

        User::factory()->create([
            'nivel' => 'funcionario',
            'nome' => 'Lucas',
            'email' => 'lucas@gmail.com',
            'senha' => Hash::make('b')
        ]);

        User::factory()->create([
            'nivel' => 'funcionario',
            'nome' => 'Daniel',
            'email' => 'daniel@gmail.com',
            'senha' => Hash::make('c')
        ]);
    }
}

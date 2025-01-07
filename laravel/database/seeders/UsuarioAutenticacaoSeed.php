<?php

namespace Database\Seeders;

use App\Models\UsuarioAutenticacao;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class UsuarioAutenticacaoSeed extends Seeder
{
        /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Cria o usuario inicial
        UsuarioAutenticacao::factory()->create([
            'id_usuario' => 1,
            'token' => Hash::make('Admin'),
            'expira' => Carbon::now()->addMinutes(10)->format("Y-m-d H:i:s")
        ]);

        UsuarioAutenticacao::factory()->create([
            'id_usuario' => 2,
            'token' => Hash::make('lucas'),
            'expira' => Carbon::now()->addMinutes(10)->format("Y-m-d H:i:s")
        ]);

        UsuarioAutenticacao::factory()->create([
            'id_usuario' => 3,
            'token' => Hash::make('daniel'),
            'expira' => Carbon::now()->addMinutes(10)->format("Y-m-d H:i:s")
        ]);
    }
}

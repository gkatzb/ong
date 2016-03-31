<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsuarioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'id_perfil' => 2,
            'nome' => 'TESTE',
            'login' => 'TESTE',
            'senha' => Hash::make('@inicial1')
        ];
        DB::table('usuario')->insert($data);

    }
}

<?php

use Illuminate\Database\Seeder;

class PerfilTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['perfil_nome' => 'Administrador'],
            ['perfil_nome' => 'Aluno'],
            ['perfil_nome' => 'Professor']
        ];
        DB::table('perfil')->insert($data);
    }
}

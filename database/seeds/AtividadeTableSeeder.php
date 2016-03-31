<?php

use Illuminate\Database\Seeder;

class AtividadeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['id_materia' => 1, 'nome' => 'Números Iguais', 'img' => '/assets/img/matematica/numeros-iguais.png', 'url' => 'numeros_iguais'],
            ['id_materia' => 1, 'nome' => 'Quantidade Certa', 'img' => '/assets/img/matematica/quantidade-certa.png', 'url' => 'qdt_certa'],
            ['id_materia' => 1, 'nome' => 'Somas', 'img' => '/assets/img/matematica/somas.png', 'url' => 'somas'],
            ['id_materia' => 2, 'nome' => 'Ache o Objeto', 'img' => '/assets/img/portugues/ache-objeto.png', 'url' => 'ache_objeto'],
            ['id_materia' => 2, 'nome' => 'Complete e Copie', 'img' => '/assets/img/portugues/complete-copie.png', 'url' => 'complete_copie'],
            ['id_materia' => 2, 'nome' => 'Maculino e Feminino', 'img' => '/assets/img/portugues/masc-fem.png', 'url' => 'genero'],
            ['id_materia' => 2, 'nome' => 'Singular e Plural', 'img' => '/assets/img/portugues/sing-plur.png', 'url' => 'singular_plural'],
            ['id_materia' => 2, 'nome' => 'Substantivos', 'img' => '/assets/img/portugues/substantivos.png', 'url' => 'substantivos']
        ];
        DB::table('atividade')->insert($data);
    }
}

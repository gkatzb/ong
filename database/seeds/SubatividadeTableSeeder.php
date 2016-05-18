<?php

use Illuminate\Database\Seeder;

class SubatividadeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['id_atividade' => 1, 'nome' => 'Procure os números iguais:', 'url' => 'numeros_iguais'],
            ['id_atividade' => 2, 'nome' => 'Selecione o número correspondente com a imagem em destaque:', 'url' => 'qtd_certa'],
            ['id_atividade' => 3, 'nome' => 'Resolva as somas:', 'url' => 'somas'],
            ['id_atividade' => 4, 'nome' => 'Encontre os objetos que comecem com a vogal A:', 'url' => 'encontre_a'],
            ['id_atividade' => 4, 'nome' => 'Encontre os objetos que comecem com a vogal E:', 'url' => 'encontre_e'],
            ['id_atividade' => 4, 'nome' => 'Encontre os objetos que comecem com a vogal I:', 'url' => 'encontre_i'],
            ['id_atividade' => 4, 'nome' => 'Encontre os objetos que comecem com a vogal O:', 'url' => 'encontre_o'],
            ['id_atividade' => 4, 'nome' => 'Encontre os objetos que comecem com a vogal U:', 'url' => 'encontre_u'],
            ['id_atividade' => 5, 'nome' => 'Complete com a vogal A e copie as palavras:', 'url' => 'complete_a'],
            ['id_atividade' => 5, 'nome' => 'Complete com a vogal E e copie as palavras:', 'url' => 'complete_e'],
            ['id_atividade' => 5, 'nome' => 'Complete com a vogal I e copie as palavras:', 'url' => 'complete_i'],
            ['id_atividade' => 5, 'nome' => 'Complete com a vogal O e copie as palavras:', 'url' => 'complete_o'],
            ['id_atividade' => 5, 'nome' => 'Complete com a vogal U e copie as palavras:', 'url' => 'complete_u'],
            ['id_atividade' => 6, 'nome' => 'Observe as palavras e numere o masculino com o feminino:', 'url' => 'genero'],
            ['id_atividade' => 7, 'nome' => 'Escreva as figuras no plural:', 'url' => 'sing_plural'],
            ['id_atividade' => 7, 'nome' => 'Reescreva as figuras da atividade anterior no singular:', 'url' => 'singular'],
            ['id_atividade' => 8, 'nome' => 'Separe os substantivos comuns dos próprios:', 'url' => 'substantivos']
        ];
        DB::table('subatividade')->insert($data);
    }
}

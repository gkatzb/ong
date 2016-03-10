<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PopulatePerfilMateriaAtividade extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /**
         * Populate perfil
         */
        $data = array(
            array('perfil_nome' => 'Administrador'),
            array('perfil_nome' => 'Aluno'),
            array('perfil_nome' => 'Professor')
        );

        DB::table('perfil')->insert($data);

        /**
         * Populate Materia
         */
        $data = array(
            array('nome' => 'Matemática'),
            array('nome' => 'Português'),
        );

        DB::table('materia')->insert($data);

        /**
         * Populate Atividade
         */
        $data = array(
            array('id_materia' => 1, 'nome' => 'ache_os_numeros'),
            array('id_materia' => 1, 'nome' => 'qtd_certa'),
            array('id_materia' => 1, 'nome' => 'soma'),
            array('id_materia' => 2, 'nome' => 'ache_letra_a'),
            array('id_materia' => 2, 'nome' => 'ache_letra_e'),
            array('id_materia' => 2, 'nome' => 'ache_letra_i'),
            array('id_materia' => 2, 'nome' => 'ache_letra_o'),
            array('id_materia' => 2, 'nome' => 'ache_letra_u'),
            array('id_materia' => 2, 'nome' => 'complete_letra_a'),
            array('id_materia' => 2, 'nome' => 'complete_letra_e'),
            array('id_materia' => 2, 'nome' => 'complete_letra_i'),
            array('id_materia' => 2, 'nome' => 'complete_letra_o'),
            array('id_materia' => 2, 'nome' => 'complete_letra_u'),
            array('id_materia' => 2, 'nome' => 'genero'),
            array('id_materia' => 2, 'nome' => 'plural'),
            array('id_materia' => 2, 'nome' => 'singular'),
            array('id_materia' => 2, 'nome' => 'substantivos')
        );

        DB::table('atividade')->insert($data);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('atividade')->delete();
        DB::table('materia')->delete();
        DB::table('perfil')->delete();
    }
}

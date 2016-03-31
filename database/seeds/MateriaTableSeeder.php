<?php

use Illuminate\Database\Seeder;

class MateriaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['nome' => 'Matemática', 'img' => '/assets/img/matematica.png', 'url' => 'matematica'],
            ['nome' => 'Português', 'img' => '/assets/img/portugues.png', 'url' => 'portugues']
        ];
        DB::table('materia')->insert($data);
    }
}

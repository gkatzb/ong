<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(PerfilTableSeeder::class);
         $this->call(UsuarioTableSeeder::class);
         $this->call(MateriaTableSeeder::class);
         $this->call(AtividadeTableSeeder::class);
         $this->call(SubatividadeTableSeeder::class);
    }
}

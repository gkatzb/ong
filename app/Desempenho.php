<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Materia;

class Desempenho extends Model
{

    protected $table = 'desempenho';
    protected $primaryKey = 'id';
    protected $fillable = ['id_usuario', 'id_subatividade', 'erros', 'acertos',];
}

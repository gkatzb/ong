<?php

namespace App;

use Illuminate\Database\Eloquent;

class Atividade extends Eloquent
{
    protected $table = 'atividade';
    protected $fillable = array('nome');
}

<?php

namespace App;

use Illuminate\Database\Eloquent;

class Materia extends Eloquent
{
    protected $table = 'materia';
    protected $fillable = array('nome');
}

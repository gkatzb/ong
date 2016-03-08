<?php

namespace App;

use Illuminate\Database\Eloquent;

class Usuario extends Eloquent
{
    protected $table = 'usuario';
    protected $fillable = array('nome', 'login', 'senha');
}

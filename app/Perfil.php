<?php

namespace App;

use Illuminate\Database\Eloquent;
use database\CustomModel as Model;

class Perfil extends Model
{
    protected $table = 'perfil';
    protected $fillable = ['nome_perfil',];
}

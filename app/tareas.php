<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tareas extends Model
{
    //protected $table = 'tareas';
    protected $fillable = [
        'titulo',
        'descripcion',
        'estado',
        'autor',
        'likes'
    ];
}

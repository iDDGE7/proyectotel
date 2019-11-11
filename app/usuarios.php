<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usuarios extends Model
{
    public $timestamps=false;
    protected $primaryKey="idUsuario";
    protected $table = 'usuario';
}

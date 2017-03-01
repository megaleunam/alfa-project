<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Celula extends Model
{
    protected  $table = 'celulas';
           protected $fillable = [
           'id_lider',
           'id_colider',
           'id_anfitrion',
           'direccion'];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AsisteReunion extends Model
{
    protected $table = 'asiste_reuniones';
    protected $fillable=[
               'id_celula',
               'id_discipulo',
               'fecha',
               'asistencia',
    ];
}

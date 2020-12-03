<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class horario extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'horarios';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Semestre', 'noCtrl', 'numeroOficioProrroga', 'idPeriodo'];

    
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class materia extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'materias';

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
    protected $fillable = ['NombreMateria', 'idMateriaInterno', 'idMateriaOficial', 'creditos', 'idReticula'];

    
}

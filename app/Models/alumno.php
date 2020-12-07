<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class alumno extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'alumnos';

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
    protected $fillable = ['noCtrl', 'Nombre', 'apellidoPaterno', 'apellidoMaterno', 'sexo', 'email', 'facebook', 'twitter', 'telefono', 'idiomaIngles', 'idiomaFrances', 'idiomaEspanol'];


}

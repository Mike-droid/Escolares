<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class personale extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'personales';

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
    protected $fillable = ['RFC', 'Nombre', 'apellidoPaterno', 'apellidoMaterno', 'ipDepto'];

    
}

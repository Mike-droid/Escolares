<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class periodo extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'periodos';

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
    protected $fillable = ['FechaInicio', 'FechaFinal'];

    
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departamentos extends Model
{
    use HasFactory;

    protected $table = "departamento";

    protected $fillable = [
      'id',
      'nombre'
    ];

    public function municipios()
    {
      return $this->hasOne('App\Models\Municipios','id','departamento_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;

    protected $table = "paciente";

    protected $fillable = [
      'tipo_documento_id',
      'numero_documento',
      'nombre1',
      'nombre2',
      'apellido1',
      'apellido2',
      'genero_id',
      'departamento_id',
      'municipio_id'
    ];

    public function tipo_documento(){
      return $this->HasOne("App\Models\TipoDocumento","id","tipo_documento_id");
    }

    public function departament(){
      return $this->HasOne("App\Models\Departamentos","id","departamento_id");
    }

    public function municipio(){
      return $this->HasOne("App\Models\Municipios","id","municipio_id");
    }

    public function genero(){
      return $this->HasOne("App\Models\Genero","id","genero_id");
    }
}

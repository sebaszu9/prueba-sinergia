<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use App\Models\Municipios;
Use Log;

class MunicipioController extends Controller
{
    //
    public function get($id_departamento){
        $data = Municipios::where('departamento_id', $id_departamento)->get();
        return response()->json($data, 200);
      }
}

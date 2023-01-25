<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use App\Models\Paciente;
Use Log;

class PacienteController extends Controller
{
    public function getAll(){
      $data = Paciente::with("departament", "municipio", "genero", "tipo_documento")->get();
      return response()->json($data, 200);
    }

    public function create(Request $request){
      $data['tipo_documento_id'] = $request['tipo_documento_id'];
      $data['numero_documento'] = $request['numero_documento'];
      $data['nombre1'] = $request['nombre1'];
      $data['nombre2'] = $request['nombre2'];
      $data['apellido1'] = $request['apellido1'];
      $data['apellido2'] = $request['apellido2'];
      $data['genero_id'] = $request['genero_id'];
      $data['departamento_id'] = $request['departamento_id'];
      $data['municipio_id'] = $request['municipio_id'];
      Paciente::create($data);
      return response()->json([
          'message' => "Successfully created",
          'success' => true
      ], 200);
    }

    public function delete($id){
      $res = Paciente::find($id)->delete();
      return response()->json([
          'message' => "Successfully deleted",
          'success' => true
      ], 200);
    }

    public function get($id){
      $data = Paciente::find($id);
      return response()->json($data, 200);
    }

    public function update(Request $request, $id){
        $data['tipo_documento_id'] = $request['tipo_documento_id'];
        $data['numero_documento'] = $request['numero_documento'];
        $data['nombre1'] = $request['nombre1'];
        $data['nombre2'] = $request['nombre2'];
        $data['apellido1'] = $request['apellido1'];
        $data['apellido2'] = $request['apellido2'];
        $data['genero_id'] = $request['genero_id'];
        $data['departamento_id'] = $request['departamento_id'];
        $data['municipio_id'] = $request['municipio_id'];
      Paciente::find($id)->update($data);
      return response()->json([
          'message' => "Successfully updated",
          'success' => true
      ], 200);
    }
}

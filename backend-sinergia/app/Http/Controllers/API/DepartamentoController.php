<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use App\Models\Departamentos;
Use Log;

class DepartamentoController extends Controller
{
    //
    public function getAll(){
        $data = Departamentos::get();
        return response()->json($data, 200);
    }
}

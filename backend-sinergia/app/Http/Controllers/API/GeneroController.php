<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use App\Models\Genero;
Use Log;

class GeneroController extends Controller
{
    //
    public function getAll(){
        $data = Genero::get();
        return response()->json($data, 200);
    }
}

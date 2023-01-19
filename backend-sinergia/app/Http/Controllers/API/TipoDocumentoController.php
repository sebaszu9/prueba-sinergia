<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use App\Models\TipoDocumento;
Use Log;

class TipoDocumentoController extends Controller
{
    //
    public function getAll(){
        $data = TipoDocumento::get();
        return response()->json($data, 200);
      }
}

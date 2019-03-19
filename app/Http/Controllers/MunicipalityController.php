<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Municipality;

class MunicipalityController extends Controller
{
    public function loadMunicipality ($id)
    {
        return response()->json(Municipality::where('departament_id', $id)->get());
    }
}

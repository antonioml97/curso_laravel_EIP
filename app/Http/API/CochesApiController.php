<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Coche;

class CochesApiController extends Controller
{
    public function index()
    {
        $coches = Coche::all();
        return response()->json($coches);
    }
}

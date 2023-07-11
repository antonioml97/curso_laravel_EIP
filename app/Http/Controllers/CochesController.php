<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Coche;

class CochesController extends Controller
{

    public function updateCoche(){
        Coche::updated(2);
    }
    public function deleteCoche(){
        Coche::destroy(1);
    }

    public function showFormularioAddCoche(){
        $titulo = "add coche";
        return view('concesionario\addCoche_Formulario' , compact('titulo') );
    }

    public function addCocheFormulario(Request $request){
        Coche::create($request);
        return view('concesionario\addCocheOk_Formulario'  );
    }
}

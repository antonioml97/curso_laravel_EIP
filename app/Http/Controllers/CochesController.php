<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Coche;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

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
        $id_cooche = Coche::create($request);
        return view('concesionario\addCocheOk_Formulario' , ['id' => $id_cooche] );
    }

    public function showAllCoches(){
        $coches = Coche::allCar();
        return view('concesionario.mostarCoches')->with('coches', $coches);
    }

    public function showPrueba(){
        return view('alertBad');
    }

    public function deleteCar($id){
        Coche::destroy($id);
        return Redirect::to('/showCoches');
    }

    public function updateCarForm($id){
        $coche = Coche::findCarID($id);
        Session::flash('id' , $id);
        return view('concesionario.mostarDatosCocheForm', compact('coche'));
    }

    public function updateCar(Request $request){
        $id = Session::get('id');
        Coche::uptatedID($id, $request);

        return Redirect::to('/showCoches');
    }
}

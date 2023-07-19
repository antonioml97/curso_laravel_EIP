<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Coche;
use Illuminate\Validation\ValidationException ;
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

    public function showCochesAPI(){
        $allCar = Coche::allCar();

        return response()->json($allCar);
    }

    public function showCochesAPIID($id){
        $coche = Coche::findCarID($id);
        return response()->json($coche);
    }

    public function showCochesAPIID_Post(Request $request){
        $request->validate([
            'id' => 'required',
        ]);

        $coche = Coche::findCarID($request->input('id'));


        return response()->json($coche);
    }


    public function addCarAPI(Request $request){
        try{
            $request->validate([
                'marca' => 'required',
                'modelo' => 'required',
                'potencia' => 'required'
            ]);
            $id_cooche = Coche::create($request);
            return response()->json($id_cooche);
        }
        catch(ValidationException  $exceptcion){
            return response()->json(['error' => $exceptcion->errors()]);
        }
    }

    public function findBrand(Request $request){
        try{
            $request->validate([
                'marca' => 'required',
            ]);
            $allCarBrand = Coche::findBrand($request->input('marca'));
            return response()->json($allCarBrand);
        }
        catch(ValidationException  $exceptcion){
            return response()->json(['error' => $exceptcion->errors()]);
        }
    }

    public function showAllCochesBrand(Request $request){
        $allCarBrand = Coche::findBrand($request->input('marca'));
        return view('concesionario.mostarCoches')->with('coches', $allCarBrand);
    }

    public function showAllCochesPower(Request $request){
        $allCarPower = Coche::findPower($request->input('potencia'));
        return view('concesionario.mostarCoches')->with('coches', $allCarPower);
    }

    public function showAllCochesPowerIntervalo(Request $request){
        $allCarPower = Coche::findPowerIntervalo($request->input('potencia1') , $request->input('potencia2'));
        return view('concesionario.mostarCoches')->with('coches', $allCarPower);
    }
}

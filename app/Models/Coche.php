<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Http\Request;


class Coche extends Model
{
    use HasFactory;

    public static function create(Request $request){
        $coche = new Coche();
        $coche->marca = $request->input('marca');
        $coche->modelo = $request->input('modelo');
        $coche->potencia = $request->input('potencia');
        $coche->save();

        return $coche->id;
    }

    public static function uptatedID($id , Request $request){
        $coche = Coche::find($id);
        $coche->marca = $request->input('marca');
        $coche->modelo = $request->input('modelo');
        $coche->potencia = $request->input('potencia');
        $coche->save();
    }

    public static function destroy($ids)
    {
        $coche = Coche::find($ids);
        $coche->delete();
    }

    public static function allCar(){
        return Coche::all();
    }

    public static function findCarID($id){
        return Coche::find($id);
    }
}

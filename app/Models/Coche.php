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
    }

    public static function updated($id){
        $coche = Coche::find($id);
        $coche->marca = "Mercedes";
        $coche->save();
    }

    public static function destroy($ids)
    {
        $coche = Coche::find($ids);
        $coche->delete();
    }

}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Coche;
use App\Models\User;

class ComprasModel extends Model
{
    use HasFactory;

    protected $table = "compras";

    public function coche(){
        return $this->belongsTo(Coche::class , 'coche_id' , 'id');
    }

    public function usuario(){
        return $this->belongsTo(User::class , 'user_id' , 'id');
    }

}

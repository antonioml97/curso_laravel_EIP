<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Coche;


class TablaCocheComponent extends Component
{
    public $coches = [];
    public $marca;
    public $modelo;
    public $potencia;
    public $matricula;

    public $errores;
    public $mensaje;

    protected $listeners = ['mensajeUpdate' ];

    public function mensajeUpdate($mensaje){
        $this->mensaje = $mensaje;
    }

    public function mount(){
        $this->coches = Coche::allCar();
    }

    public function addCoche(){
        //$this->emit('mensajeUpdate', "Se esta añadiendo un coche");

        sleep(rand(20,30));
        if(  $this->potencia > 500){
            $this->errores = "La potencia es demasiada";
        }
        else{
            $this->errores = "";
            //Creo un nuevo coche
            $newCoche = Coche::createValores($this->marca , $this->modelo , $this->potencia , $this->matricula);

            //Recargo valores
            $this->coches[] = $newCoche;

            //Limpio los valores
            $this->marca = '';
            $this->modelo = '';
            $this->potencia = '';
            $this->matricula = '';
        }
    }

    public function render()
    {
        return view('livewire.tabla-coche-component');
    }
}

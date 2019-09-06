<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mascota;
use App\Especie;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

use Auth;


class MascotaController extends Controller
{

    public function listEspecies(){   
        $especies = Especie::all() ;                
        return view('pages.mascota.create', ['especies' => $especies]);
    }

    public function agregarMascota(){

        $this->validate(request(), [
                        
            'chip' => 'required|min:15',
            'nombre' => 'required|max:10|string',
            'sexo'=> 'required',
            'fecha' => 'required|date_format:d/m/Y|min:10|max:10',                                 
            'especie' => 'required',
            'raza' => 'required',
            'foto' => 'mimes:jpeg,jpg,png,bmp',   
            'usuario' => 'required'
        ]);  
        
        $mascota = new Mascota();
        $mascota->nombre = request()->get('nombre');
        $mascota->chip = request()->get('chip');
        $mascota->sexo = request()->get('sexo');        
        $mascota->fecha_nacimiento = request()->get('fecha');
        $mascota->especie_id = request()->get('especie');        
        $mascota->raza_id = request()->get('raza');
        $mascota->user_id = request()->get('usuario');

        if(Input::hasFile('foto')){
            $foto=Input::file('foto');
            $foto->move(public_path().'/fotos/mascotas/',$foto->getClientOriginalName());
            $mascota->foto=$foto->getClientOriginalName();            
        }else{
            $mascota->foto = '/fotos/mascotas/null';
        }

        try {
            $mascota->save();
        } catch (\Exception $e) {
            return redirect()->back()->withErrors('No se pudo insertar la mascota');
        }
        return redirect('/user-profile/mascota')->with('message', array('title' => '¡Genial!', 'body'=>'Tu mascotas a sido agregada con exito')); 
    }

    public function index()
    {
        $mascotas = Mascota::all() ; 
        return view('pages.mascota.index', compact('mascotas'));
    }


    
}

// $this->validate(request(), [
//     'nombre' => 'required|max:10|string',
//     'sexo'=> 'required',
//     'fechaNacimiento' => 'required|date_format:d/m/Y|min:10|max:10',
//     'chip' => 'required|min:15|max:15|numeric',
//     'foto' => 'required|mimes:jpeg,jpg,png|max:50',
//     'especie' => 'required',
//     'raza' => 'required',
//     'user' => 'required'
// ]);        
// $mascota = new Mascota();
// $mascota->nombre = request()->get('nombre');
// $mascota->sexo = request()->get('nombre');
// $mascota->foto = request()->get('nombre');
// $mascota->fechaNacimiento = request()->get('nombre');
// $mascota->especie_id = request()->get('nombre');
// $mascota->user_id = request()->get('nombre');
// $mascota->raza_id = request()->get('nombre');
// try {
//     $mascota->save();
// } catch (\Exception $e) {
//     return redirect()->back()->withErrors('No se pudo insertar la mascota');
// }
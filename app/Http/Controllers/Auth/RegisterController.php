<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\DetalleUsuario;

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    public function register(){
        
        $this->validate(request(), [
            'rut' => 'required|max:10|string',
            'verificador'=> 'required|alpha_num',
            'nombre' => 'required|max:20|regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/',
            'apellido' => 'nullable|max:20|regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/',
            'direccion' => 'required|max:50',
            'telefono1' => 'required|numeric',
            'telefono2' => 'numeric',
            'email' => 'required|email|max:50|string|unique:user',
            'contraseña' => 'required|string|min:6|same:confirmar'
        ]);

        $user = User::create([
            
            $contrut = request()->get('rut'),            
            $contveri = request()->get('verificador'), 
            $rut = $contrut."-".$contveri,


            'rut' => $rut,
            'name' => request()->get('nombre'),
            'lastname' => request()->get('apellido'),
            'email' => request()->get('email'),
            'password' => bcrypt(request()->get('contraseña')),
            'type' => request()->get('tipo_usuario')
        ]);
        
        $cliente = DetalleUsuario::create([

            $conttel1 = request()->get('telefono1'),
            $telefono1 = "569".$conttel1,
            $conttel2 = request()->get('telefono2'),
            $telefono2 = "569".$conttel1,

            'user_id' => $user->id,
            'direccion' => request()->get('direccion'),
            'telefono_1' => $telefono1,
            'telefono_2' => $telefono2
        ]);

        if(request()->get('tipo_usuario') == 'Cliente')
        {
            return redirect('/login')->with('message', array('title' => '¡Genial!', 'body'=>'Tu cuenta de usuario a sido creada con exito'));
        }elseif(request()->get('tipo_usuario') == 'Trabajador')
        {
            return back()->with('message', array('title' => '¡Genial!', 'body'=>'Tu cuenta de trabajador a sido creada con exito'));
        }
    }

    // use RegistersUsers;
    // protected $redirectTo = '/home';
    // public function __construct()
    // {
    //     $this->middleware('guest');
    // }
    // protected function validator(array $data)
    // {
    //     return Validator::make($data, [
    //         'name' => 'required|string|max:255',
    //         'email' => 'required|string|email|max:255|unique:users',
    //         'password' => 'required|string|min:6|confirmed',
    //     ]);
    // }
    // protected function create(array $data)
    // {
    //     return User::create([
    //         'name' => $data['name'],
    //         'email' => $data['email'],
    //         'password' => bcrypt($data['password']),
    //     ]);
    // }
}

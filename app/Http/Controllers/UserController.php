<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\MessageBag;

class UserController extends Controller
{
    
    public function index()
    {
         return view('components.login');
    } 
    public function create()
    {
         return view('components.create');
    } 
    public function main()
    {
         return view('components.main');
    } 


    public function createUser(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'username' => 'required|unique:Usuarios',
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()
                            ->withErrors($validator)
                            ->withInput();
        }
    


        $Usuario = new Usuario;
        $Usuario->username = $request->username;
        $Usuario->password = Hash::make($request->input('password'));
        $Usuario->save();

        return redirect()->route("index")->with('success', 'Usuario creado con éxito');
    }

    public function login(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');
    
        // Buscar al usuario en la base de datos
        $Usuario = Usuario::where('username', $username)->first();
    
        // Verificar si existe y si la contraseña es correcta
        if ($Usuario && Hash::check($password, $Usuario->password))  {
            // Iniciar sesión y redirigir al dashboard
            $request->session()->put('user_id', $Usuario->id);
            return redirect()->intended('main');
        } else {
            return redirect()->back()->withInput()->withErrors(['username' => 'Usuario o contraseña incorrectos']);
        }
    }
}

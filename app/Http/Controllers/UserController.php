<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Usuario;

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


    public function createUser(Request $request)
    {
        $Usuario = new Usuario;
        $Usuario->username = $request->username;
        $Usuario->password = bcrypt($request->password);
        $Usuario->save();

        return redirect()->back()->with('success', 'Usuario creado exitosamente');
    }


}

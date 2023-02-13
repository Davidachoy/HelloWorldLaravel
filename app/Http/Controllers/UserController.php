<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use Illuminate\Support\Facades\Validator;
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
        $Usuario->password = bcrypt($request->password);
        $Usuario->save();

        return redirect()->route("index")->with('success', 'Usuario creado con éxito');
    }


}

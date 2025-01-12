<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function __contructor()
    {
        $this->middleware(['guest']);      
    }

    public function register(Request $request) {
        // validar la peticion: 
        // antes: dd('ok');
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);

    }
    
}

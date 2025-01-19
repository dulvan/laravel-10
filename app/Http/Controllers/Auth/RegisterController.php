<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Auth\Request;  //revisar responde 200 ok sin validar el correo 19 01 2025
use App\Http\Requests\Auth\RegisterRequest;

class RegisterController extends Controller
{
    public function __contructor()
    {
        $this->middleware(['guest']);      
    }

    public function register(RegisterRequest $request) {

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);

    }
    
}

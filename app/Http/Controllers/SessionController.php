<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\validadorLogin;

class SessionController extends Controller
{
    public function create(){
        return view('login');
    }
    public function store(validadorLogin $request){
        if(auth()->attempt(request(['usuario', 'contraseña'])) == false){
            return back()->withErrors([
                'message' => 'Por favor verifica tus credenciales e intenta de nuevo'
            ]);
        }
        return redirect()->to('/');
    }
}

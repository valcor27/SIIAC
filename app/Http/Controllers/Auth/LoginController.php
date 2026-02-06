<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    /**
     * Muestra el formulario de login
     */
    public function showLogin()
    {
        return view('login');
    }

    /**
     * Procesa el login
     */
    public function login(Request $request)
    {
       // dd('Entre al controlador', $request->all());
        // 1️⃣ Validar datos
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // 2️⃣ Buscar usuario activo
        $usuario = Usuario::where('email_institucional', $request->email)
            ->where('estatus', 1)
            ->first();

        // 3️⃣ Validar existencia y password
        if (!$usuario || !Hash::check($request->password, $usuario->password_hash)) {
            return back()->withErrors([
                'email' => 'Credenciales incorrectas',
            ]);
        }

        // 4️⃣ Crear sesión
        Auth::login($usuario);

        // 5️⃣ Redirección temporal
        return redirect('/welcome');
    }

    /**
     * Cerrar sesión
     */
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginRedirectController extends Controller
{
    public function handleRedirect(Request $request)
    {
        // Puedes personalizar la lógica de redirección aquí
        if ($request->user()->is_admin) {
            // Redirigir a los administradores
            return redirect()->route('admin.dashboard');
        }

        // Redirigir a usuarios regulares
        return redirect()->route('user.dashboard');
    }
}

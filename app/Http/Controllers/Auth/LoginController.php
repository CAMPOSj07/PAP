<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // ... (outros métodos do controlador)

    protected function authenticated(Request $request, $user)
    {
        if ($user->escalao_id === 1) {
            // Treinador de Seniores
            return redirect('/dashboardSeniores');
        } elseif ($user->escalao_id === 2) {
            // Treinador de Juniores
            return redirect('/dashboardJuniores');
        } elseif ($user->escalao_id === 3) {
            // Treinador de Juvenis
            return redirect('/dashboardJuvenis');
        }

        // Redirecionamento padrão se não houver correspondência
        return redirect('/dashboardPadrao');
    }

    protected function loggedOut(Request $request)
    {
        return redirect()->route('welcome');
    }
}

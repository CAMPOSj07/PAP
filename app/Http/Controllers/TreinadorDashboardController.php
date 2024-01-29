<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller; 

class TreinadorDashboardController extends Controller
{
    public function index($escalao)
    {
        // Lógica para determinar se o treinador tem permissão para acessar o escalão
        $userCanAccessDashboard = Auth::user()->escalao === $escalao;

        // Determine qual arquivo de visão usar com base no escalão
        $dashboardView = "dashboard{$escalao}";

        // Verifique se a visão existe antes de retornar
        if (view()->exists($dashboardView)) {
            return view($dashboardView, compact('userCanAccessDashboard'));
        }

        // Se a visão específica do escalão não existir, redirecione para a visão padrão
        return view('dashboard', compact('userCanAccessDashboard'));
    }
}

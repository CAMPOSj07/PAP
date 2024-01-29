<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function convocatoria()
    {
        return view('convocatoria'); // Certifique-se de ter a view convocatoria.blade.php criada
    }

    public function menujogo()
    {
        return view('menujogo'); // Certifique-se de ter a view menujogo.blade.php criada
    }

    // Adicione outros métodos conforme necessário
}

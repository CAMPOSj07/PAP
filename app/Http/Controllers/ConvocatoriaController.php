<?php

// ConvocatoriaController.php

namespace App\Http\Controllers;

use App\Models\Jogador;
use Illuminate\Http\Request;

class ConvocatoriaController extends Controller
{
    public function index()
    {
        $jogadores = Jogador::all();
        return view('convocatoria', compact('jogadores'));
    }
}


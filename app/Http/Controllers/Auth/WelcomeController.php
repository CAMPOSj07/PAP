<?php

// app/Http/Controllers/WelcomeController.php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit()
    {
        $user = Auth::user();
        return view('profile.edit', compact('user'));
    }

    /**
     * Update the user's profile information.
     */
    public function update(Request $request)
    {
        $user = Auth::user();

        // Valide os campos do formulário conforme necessário
        $request->validate([
            'name' => 'required|string|max:255',
            // Adicione outras regras de validação conforme necessário
        ]);

        // Atualize os campos do perfil
        $user->update([
            'name' => $request->input('name'),
            // Adicione outros campos do perfil conforme necessário
        ]);

        return redirect()->route('profile.edit')->with('success', 'Perfil atualizado com sucesso.');
    }



    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        // Se precisar validar campos específicos para a exclusão, pode fazer isso aqui

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}

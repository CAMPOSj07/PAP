<?php

// AuthServiceProvider.php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    protected $policies = [
        // ...
    ];

    public function boot()
    {
        $this->registerPolicies();

        Gate::define('editar_resultados', function ($user) {
            // Lógica para verificar se o usuário tem permissão para editar resultados
            return $user->role === 'admin'; // Ou qualquer lógica que você precisar
        });
    }
}

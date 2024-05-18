<?php

namespace App\Providers;


use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        // Aqui é onde define a regra de negócios do nível de acesso dos usuários
        // Aqui será usado Gate e Can para restringir ou permitir acesso a diferentes
        // páginas da nossa aplicação.
        Gate::define('level', function(User $user){
            return $user->level == 'admin';
        });
    }
}

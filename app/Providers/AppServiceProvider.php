<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Auth;
use Filament\Facades\Filament; 
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        /**
         * Diretiva Blade @filamentAdmin
         *
         * Verifica diretamente na sessão se existe uma chave de login do Filament.
         * Esta é a abordagem mais confiável para verificar o status de login do admin
         * a partir da parte pública do site.
         */
        Blade::if('filamentAdmin', function () {
            // Itera por todas as chaves da sessão atual
            foreach (session()->all() as $key => $value) {
                // Se encontrar qualquer chave que comece com 'login_filament_',
                // significa que um login no painel está ativo nesta sessão.
                if (str_starts_with($key, 'login_filament_')) {
                    return true;
                }
            }
            // Se o loop terminar e não encontrar a chave, o usuário não está logado no painel.
            return false;
        });
    }
}

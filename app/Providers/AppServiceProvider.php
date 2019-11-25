<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
// caso tivesse erro na criacao da tabela devido o erro de excesso de caracteres por diferenca de versao, conforme artigo: laravel-news.com/laravel-5-4-key-too-long-error
// soh precisa fazer uma vez que corrige o erro para sempre neste projeto

// use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // continuacao da correcao do erro
        // Schema::defaultStringLength(191);
    }
}

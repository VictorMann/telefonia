<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Request;
use App\Models\Menu;

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
        /**
         *  Variaveis para o menu de navegação lateral
         */
        view()->composer('partials.menu', function ($view) {

            // menu
            $menu = Menu::whereNull('sub')->orderBy('order')->get();

            $view->with('menu', $menu);
        });


        /**
         *  Variáveis para o breadcrumb
         */
        view()->composer('partials.breadcrumb', function ($view) {

            // obtem o nome da rota
            $routeName = Request::route()->getName();

            // menu atual da rota
            $menu = Menu::where('route', $routeName)->first();

            // breadcrump onde terão as rotas adjacentes
            $breadcrumb = collect();

            // adiciona rotas pai ao breadcrumb
            if ($menu) do $breadcrumb->prepend($menu); while ($menu = $menu->parent);

            $view->with('breadcrumb', $breadcrumb);
        });
    }
}

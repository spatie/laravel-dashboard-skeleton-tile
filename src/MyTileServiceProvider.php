<?php

namespace Vendor\MyTile;

use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;

class MyTileServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                FetchDataFromApiCommand::class,
            ]);
        }

        $this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views/vendor/dashboard-my-tile'),
        ], 'dashboard-my-tile-views');

        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'dashboard-my-tile');

        Livewire::component('my-tile', MyTileComponent::class);
    }
}

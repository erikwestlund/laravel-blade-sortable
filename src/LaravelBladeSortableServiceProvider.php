<?php

namespace ErikWestlund\LaravelBladeSortable;

use ErikWestlund\LaravelBladeSortable\Components\Scripts;
use ErikWestlund\LaravelBladeSortable\Components\Sortable;
use ErikWestlund\LaravelBladeSortable\Components\SortableItem;
use Blade;
use Illuminate\Support\ServiceProvider;

class LaravelBladeSortableServiceProvider extends ServiceProvider
{
    public function boot()
    {
         $this->loadViewsFrom(__DIR__.'/../resources/views', 'laravel-blade-sortable');

        Blade::component('laravel-blade-sortable::sortable', Sortable::class);
        Blade::component('laravel-blade-sortable::sortable-item', SortableItem::class);
        Blade::component('laravel-blade-sortable::scripts', Scripts::class);
    }

    public function register()
    {
        //
    }
}

<?php
/**
 * This file is part of ruogoo.
 *
 * Created by HyanCat.
 *
 * Copyright (C) HyanCat. All rights reserved.
 */

namespace Ruogoo\OpenSearch;

use Illuminate\Support\ServiceProvider;
use Laravel\Scout\EngineManager;

class OpenSearchServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app[EngineManager::class]->extend('opensearch', function ($app) {
            return new OpenSearchEngine($app['config']);
        });
    }

    public function boot()
    {
        //
    }
}

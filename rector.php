<?php

use Rector\Config\RectorConfig;
use RectorLaravel\Set\LaravelLevelSetList;

return RectorConfig::configure()
    ->withPaths([
        __DIR__.'/app',
        __DIR__.'/database',
        __DIR__.'/routes',
        __DIR__.'/src',
        __DIR__.'/tests',
    ])
    ->withSets([
        LaravelLevelSetList::UP_TO_LARAVEL_120,
    ])
    ->withRules([

    ])
    ->withPreparedSets(

    );

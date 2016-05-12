<?php

namespace IoCTest\Bootstrappers;

use Illuminate\Support\Facades\Facade;
use IoCTest\Foundation\AliasLoader;
use IoCTest\Application;

class RegisterFacades
{
    /**
     * Bootstrap the given application.
     *
     * @param  \Illuminate\Contracts\Foundation\Application  $app
     * @return void
     */
    public function bootstrap(Application $app)
    {
        Facade::clearResolvedInstances();

        Facade::setFacadeApplication($app);

        AliasLoader::getInstance($app->make('config')->get('app.aliases'))->register();
    }
}

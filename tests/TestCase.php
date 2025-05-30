<?php

namespace Digitlimit\Flag\Tests;

use Digitlimit\Flag\FlagServiceProvider;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Testing\Concerns\InteractsWithViews;
use Illuminate\Support\Facades\Facade;
use Orchestra\Testbench\TestCase as BaseTestCase;

class TestCase extends BaseTestCase
{
    use InteractsWithViews;

    protected function getPackageProviders($app): array
    {
        return [
            FlagServiceProvider::class,
        ];
    }

    /**
     * Override application aliases.
     *
     * @param Application $app
     *
     * @return array<string, class-string<Facade>>
     */
    protected function getPackageAliases($app): array
    {
        return [

        ];
    }

    protected function getEnvironmentSetUp($app)
    {
        // perform environment setup
    }

    public function packagePath(string $path = ''): string
    {
        return __DIR__.'/../'.$path;
    }
}

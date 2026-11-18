<?php

declare(strict_types=1);

namespace ArtisanBuild\GH\Tests;

use ArtisanBuild\GH\Providers\GHServiceProvider;
use Orchestra\Testbench\TestCase as OrchestraTestCase;

class TestCase extends OrchestraTestCase
{
    protected function getPackageProviders($app): array
    {
        return [GHServiceProvider::class];
    }
}

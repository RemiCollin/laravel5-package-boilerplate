<?php

namespace Vendor\Package\Tests;

use Vendor\Package\PackageServiceProvider;
use Orchestra\Testbench\TestCase;

abstract class PackageTestCase extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [PackageServiceProvider::class];
    }
}

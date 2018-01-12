<?php

namespace Unikat\AllImport\Tests;
use Orchestra\Testbench\TestCase as OrchestraTestCase;
use Unikat\AllImport\AllImportServiceProvider;

class TestCase extends OrchestraTestCase
{
    
    protected function getPackageProviders ($app)
    {
        return [AllImportServiceProvider::class];
    }
}
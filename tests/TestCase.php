<?php

namespace codicastudio\NovaScheduledJobs\Tests;

use Illuminate\Support\Facades\Route;
use codicastudio\NovaScheduledJobs\NovaScheduledJobsServiceProvider;
use Orchestra\Testbench\TestCase as OrchestraTestCase;

abstract class TestCase extends OrchestraTestCase
{
    public function setUp(): void
    {
        parent::setUp();

        Route::middlewareGroup('nova', []);

        $this->withoutExceptionHandling();
    }

    protected function getPackageProviders($app)
    {
        return [
            NovaScheduledJobsServiceProvider::class,
        ];
    }

}

<?php

namespace DevOption\Workflows\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use DevOption\Workflows\Providers\WorkflowProvider;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [
            WorkflowProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');
    }
}
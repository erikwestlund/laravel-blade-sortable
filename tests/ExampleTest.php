<?php

namespace ErikWestlund\LaravelBladeSortable\Tests;

use Orchestra\Testbench\TestCase;
use ErikWestlund\LaravelBladeSortable\LaravelBladeSortableServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [LaravelBladeSortableServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}

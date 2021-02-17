<?php

namespace Tepuilabs\SimpleCrm\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Orchestra\Testbench\TestCase as Orchestra;
use Tepuilabs\SimpleCrm\SimpleCrmServiceProvider;

class TestCase extends Orchestra
{
    public function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'Tepuilabs\\SimpleCrm\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            SimpleCrmServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        $app['config']->set('database.default', 'sqlite');
        $app['config']->set('database.connections.sqlite', [
            'driver' => 'sqlite',
            'database' => ':memory:',
            'prefix' => '',
        ]);


        include_once __DIR__.'/../database/migrations/create_leads_table.php.stub';
        include_once __DIR__.'/../database/migrations/create_notes_table.php.stub';
        include_once __DIR__.'/../database/migrations/create_services_table.php.stub';
        include_once __DIR__.'/database/migrations/create_users_table.php.stub';

        (new \CreateUsersTable())->up();
        (new \CreateLeadsTable())->up();
        (new \CreateNotesTable())->up();
        (new \CreateServicesTable())->up();
    }
}

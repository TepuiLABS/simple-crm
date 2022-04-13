<?php

namespace Tepuilabs\SimpleCrm;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class SimpleCrmServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('simple-crm')
            ->hasMigrations([
                'create_leads_table',
                'create_notes_table',
                'create_services_table',
                'create_projects_table',
            ]);
    }
}

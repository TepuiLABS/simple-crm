<?php

namespace Tepuilabs\SimpleCrm;

use Illuminate\Support\ServiceProvider;

class SimpleCrmServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        if ($this->app->runningInConsole()) {

            $this->publishes([
                __DIR__ . '/../models' => app_path('Models/Tepuilabs/SimpleCrm'),
            ], 'simple-crm-models');

            $migrationFileNames = [
                'create_leads_table.php',
                'create_notes_table.php',
            ];

            foreach ($migrationFileNames as $key) {
                if (! $this->migrationFileExists($key)) {
                    $this->publishes([
                        __DIR__ . "/../database/migrations/{$key}.stub" => database_path('migrations/' . date('Y_m_d_His', time()) . '_' . $key),
                    ], 'simple-crm-migrations');
                }
            }
        }
    }

    public function register(): void
    {
        //
    }

    public static function migrationFileExists(string $migrationFileName): bool
    {
        $len = strlen($migrationFileName);
        foreach (glob(database_path("migrations/*.php")) as $filename) {
            if ((substr($filename, -$len) === $migrationFileName)) {
                return true;
            }
        }

        return false;
    }
}

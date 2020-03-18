<?php
    namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class HelpersServiceProvider extends ServiceProvider
    {
        public function register()
        {
            require_once __DIR__ . '/../Helpers/helpers.php';
        }
    }



?>
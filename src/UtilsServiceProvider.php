<?php

namespace Juarismi\Utils;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

class UtilsServiceProvider extends ServiceProvider
{

	public function boot(){

        /*$this->app->singleton('cors', function ($app) {
            return new Cors();
        });*/

	    $this->loadMigrationsFrom(__DIR__.'/Database/Migrations');
	   	$this->registerRoutes();
    }

    protected function registerRoutes(){
    	Route::group([ 'prefix' => 'api/v1' ], function(){
    		$this->loadRoutesFrom(__DIR__.'/Routes/api.php', 'jEduca');
    	});
    }

}
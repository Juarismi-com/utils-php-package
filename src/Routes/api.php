<?php

Route::name('jUtils.')
	->namespace('Juarismi\Educa\Http\Controllers')
	->middleware(['api', 'cors'])
	->prefix('educa')
	->group(function ($router) {

	Route::get('/', function() {
	    return 'Juarismi - Educa';
	});
    
    Route::apiResources([
    	'inscripciones' => 'InscripcionController',
    	'cursos' => 'CursoController'
    ]);
});
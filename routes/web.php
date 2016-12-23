<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', 'viewsCtrl@index');

Route::get('servicios', 'viewsCtrl@servicios');

Route::get('contacto', 'viewsCtrl@contacto');

Route::group(['prefix' => 'arreglos'], function () {
    Route::get('{arreglo}', function ($arreglo)    {
    	return view('arreglos.'.$arreglo);
    });
}); 

Route::group(['prefix' => 'florerias'], function () {
    Route::get('{lugar}', function ($lugar)    {
    	return view('places.'.$lugar);
    });
});
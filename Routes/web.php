<?php

use App\Support\Helpers\ModuleHelper;
use App\Support\Module;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::prefix('market')->group(function () {
//     Route::get('/', 'MarketController@view_index');
// });


Route::prefix(Module::currentConfig('web.prefix'))->group(function () {
    Route::get('', "MarketController@view_index");
});

Route::prefix(Module::currentConfig('admin.prefix'))->group(function () {
    Route::prefix(Module::currentConfig('web.prefix'))->group(function () {
        Route::get('', "MarketController@view_index");
        Route::get('/{module}', "MarketController@view_admin_modules_intro");
        Route::get('/{module}/install', "MarketController@view_admin_modules_install");
        Route::get('/installed', "MarketController@view_admin_installed");
    });
});

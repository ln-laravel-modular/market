<?php

use App\Support\Helpers\ModuleHelper;
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


Route::prefix(ModuleHelper::current_config('web.prefix'))->group(function () {
});

Route::prefix(ModuleHelper::current_config('admin.prefix'))->group(function () {
    Route::prefix(ModuleHelper::current_config('web.prefix'))->group(function () {
        Route::get('/modules', "MarketController@view_admin_modules");
        Route::get('/installed', "MarketController@view_admin_installed");
    });
});
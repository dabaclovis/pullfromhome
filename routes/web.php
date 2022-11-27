<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CloudController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\LaravelController;

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

Route::controller(PagesController::class)->group(function(){
    Route::get('/', 'index')->name('pages.index');
    Route::get('about', 'about')->name('pages.about');
    Route::get('policy','policy')->name('pages.policy');
});
Route::controller(LaravelController::class)->group(function(){
    Route::get('laravel', 'index')->name('laravel.index');
    // Route::get('about', 'about')->name('pages.about');
    // Route::get('policy','policy')->name('pages.policy');
});
Route::controller(CloudController::class)->group(function(){
    Route::get('cloud', 'index')->name('cloud.index');
    // Route::get('about', 'about')->name('pages.about');
    // Route::get('policy','policy')->name('pages.policy');
});

Route::controller(ContentController::class)->group(function(){
    Route::get('paga','index')->name('cont.git');
    Route::get('pagb','pagb')->name('cont.maven');
    Route::get('pagc','pagc')->name('cont.linux');
    Route::get('pagd','pagd')->name('cont.jenkins');
    Route::get('page','page')->name('cont.ansible');
    Route::get('pagf','pagf')->name('cont.docker');
    Route::get('pagg','pagg')->name('cont.nagios');
    Route::get('pagh','pagh')->name('cont.terraform');
});

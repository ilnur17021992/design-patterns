<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\CreationPatternsController;
use App\Http\Controllers\FundamentalPatternsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', TestController::class);

Route::prefix('/fundamental')->group(function () {
    Route::get('/property-container', [FundamentalPatternsController::class, 'propertyContainer']);
    Route::get('/delegation', [FundamentalPatternsController::class, 'delegation']);
    Route::get('/event-chanel', [FundamentalPatternsController::class, 'eventChanel']);
});

Route::prefix('/creation')->group(function () {
    Route::get('/abstract-factory', [CreationPatternsController::class, 'abstractFactory']);
    Route::get('/factory-method', [CreationPatternsController::class, 'factoryMethod']);
    Route::get('/static-factory', [CreationPatternsController::class, 'staticFactory']);
    Route::get('/simple-factory', [CreationPatternsController::class, 'simpleFactory']);
    Route::get('/singleton', [CreationPatternsController::class, 'singleton']);
});



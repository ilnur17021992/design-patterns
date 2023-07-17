<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\CreationPatternsController;
use App\Http\Controllers\BehavioralPatternsController;
use App\Http\Controllers\StructuralPatternsController;
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
    Route::get('/multiton', [CreationPatternsController::class, 'multiton']);
    Route::get('/builder', [CreationPatternsController::class, 'builder']);
});

Route::prefix('/behavioral')->group(function () {
    Route::get('/strategy', [BehavioralPatternsController::class, 'strategy']);
});

Route::prefix('/structural')->group(function () {
    Route::get('/decorator', [StructuralPatternsController::class, 'decorator']);
    Route::get('/dto', [StructuralPatternsController::class, 'dto']);
    Route::get('/adapter', [StructuralPatternsController::class, 'adapter']);
    Route::get('/facade', [StructuralPatternsController::class, 'facade']);
    Route::get('/bridge', [StructuralPatternsController::class, 'bridge']);
    Route::get('/composite', [StructuralPatternsController::class, 'composite']);

});
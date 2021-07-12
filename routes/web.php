<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::post('/targetConcept/get' , [App\Http\Controllers\TargetConceptController::class , 'getTargetConcepts'])->name('targetConcept.get');
Route::post('/targetConcept/get/data' , [App\Http\Controllers\TargetConceptController::class , 'getTargetConceptData'])->name('targetConcept.data');

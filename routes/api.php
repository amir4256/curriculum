<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubConceptController;
use App\Http\Controllers\ThemeController;
use App\Http\Controllers\CurriculumexpertController;
use App\Http\Controllers\AuthorscouchController;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\TargetConceptController;
use App\Http\Controllers\ComprehensivetaskController;
use App\Http\Controllers\GradeController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/**
 * authors and couches
 **/
Route::group(['prefix' => 'authorscouch'], function () {
    Route::post('/create', [AuthorscouchController::class, 'create'])->name('authorscouch_create');
});

/**
 * comprehensive tasks
 **/
Route::group(['prefix' => 'comprehensivetask'], function () {
    Route::post('/create', [ComprehensivetaskController::class, 'create'])->name('comprehensivetask_create');
    Route::get('/getbyid', [ComprehensivetaskController::class, 'getById'])->name('comprehensivetask_getbyid');
    Route::get('/getall', [ComprehensivetaskController::class, 'getAll'])->name('comprehensivetask_getall');
    Route::post('/update', [ComprehensivetaskController::class, 'update'])->name('comprehensivetask_update');
    Route::post('/delete', [ComprehensivetaskController::class, 'delete'])->name('comprehensivetask_delete');
});

/**
 * target concepts
 **/
Route::group(['prefix' => 'targetConcept'], function () {
    Route::post('/get' , [TargetConceptController::class , 'getTargetConcepts'])->name('targetConcept.get');
    Route::post('/get/data' , [TargetConceptController::class , 'getTargetConceptData'])->name('targetConcept.data');
});

/**
 * curriculum experts
 **/
Route::group(['prefix' => 'curriculumexpert'], function () {
    Route::post('/create', [CurriculumexpertController::class, 'create'])->name('curriculumexpert_create');
});

/**
 * grades
 */
Route::group(['prefix' => 'grade'], function () {
    Route::get('/getall', [GradeController::class, 'getAll'])->name('curriculumexpert_getall');
});

/**
 *  schools and school managements
 **/
Route::group(['prefix' => 'school'], function () {
    Route::post('/update', [SchoolController::class, 'update'])->name('school_update');
});

/**
 * sub concepts
 **/
Route::group(['prefix' => 'subconcept'], function () {
    Route::post('/create', [SubConceptController::class, 'create'])->name('subconcept_create');
});

/**
 * target concepts
 **/
Route::group(['prefix' => 'targetconcept'], function () {
    Route::get('/getall', [TargetConceptController::class, 'index'])->name('targetconcept_getall');
    Route::get('/getbyid', [TargetConceptController::class, 'getById'])->name('targetconcept_getbyid');
    Route::get('/filter', [TargetConceptController::class, 'filter'])->name('targetconcept_filter');
});

/**
 *  themes
 **/
Route::group(['prefix' => 'theme'], function () {
    Route::post('/create', [ThemeController::class, 'create'])->name('theme_create');
});

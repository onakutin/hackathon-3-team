<?php

use App\Http\Controllers\AnimalController;
use App\Http\Controllers\OwnerController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\VisitController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::view('/', 'welcome')->name('welcome');


Route::get('/animals', [AnimalController::class, 'index'])->name('animals.index');

Route::get('/animals/create', [AnimalController::class, 'create'])->name('animals.create');
Route::post('/animals', [AnimalController::class, 'store'])->name('animals.store');
Route::get('/animals/{animal}/edit', [AnimalController::class, 'edit'])->whereNumber('animal')->name('animals.edit');
Route::put('/animals/{animal}', [AnimalController::class, 'update'])->whereNumber('animal')->name('animals.update');
Route::delete('/animals/{animal}', [AnimalController::class, 'destroy'])->whereNumber('animal')->name('animals.destroy');
Route::get('/animals/{animal}', [AnimalController::class, 'show'])->whereNumber('animal')->name('animals.show');


Route::get('/owners', [OwnerController::class, 'index'])->name('owners.index');

Route::get('/owners/create', [OwnerController::class, 'create'])->name('owners.create');
Route::post('/owners', [OwnerController::class, 'store'])->name('owners.store');
Route::get('/owners/{owner}/edit', [OwnerController::class, 'edit'])->whereNumber('owner')->name('owners.edit');
Route::put('/owners/{owner}', [OwnerController::class, 'update'])->whereNumber('owner')->name('owners.update');
Route::delete('/owners/{owner}', [OwnerController::class, 'destroy'])->whereNumber('owner')->name('owners.destroy');
Route::get('/owners/{owner}', [OwnerController::class, 'show'])->whereNumber('owner')->name('owners.show');

Route::get('/search', [SearchController::class, 'search'])->name('search');


Route::get('/visits', [VisitsController::class, 'index'])->name('visits.index');
Route::get('/visits/create', [VisitController::class, 'create'])->name('visits.create');
Route::post('/visits', [VisitController::class, 'store'])->name('visits.store');

Route::get('/visits/{visit}/edit', [VisitController::class, 'edit'])->whereNumber('visit')->name('visits.edit');
Route::put('/visits/{visit}', [VisitController::class, 'update'])->whereNumber('visit')->name('visits.update');

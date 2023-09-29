<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\AssignmentsController;
use App\Http\Controllers\PeripheralsController;
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
    return view('auth/login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('item', ItemController::class)->middleware('auth');

Route::resource('person', PersonController::class)->middleware('auth');

Route::resource('perifericos', PeripheralsController::class)->middleware('auth');


//rutas de reporte en excel
Route::get('/report1', [AssignmentsController::class,'reporteasignacion'])->name('asigna1');
Route::get('/report', [ItemController::class,'resporte'])->name('export');
//aqui termina


Route::resource('assignments', AssignmentsController::class)->middleware('auth');

// ruta para ver un item

Route::get('/Item/{id}/detail', 'App\Http\Controllers\ItemController@detail')->name('detalleseguimiento');

Route::get('/asignacion/{id}/detail', 'App\Http\Controllers\AssignmentsController@detail')->name('detalleasignacion');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/grafica-barras', [ItemController::class, 'graficaBarras'])->name('grafica.barras');

//ruta para dar de baja
Route::get('/baja/{id}', [ItemController::class, 'darbaja'])->name('baja1');

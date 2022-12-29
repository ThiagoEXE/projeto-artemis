<?php

use App\Http\Controllers\ChartJsController;
use TCG\Voyager\Facades\Voyager;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImportadorController;

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


Route::group(['prefix' => 'dashboard'], function () {
    Route::get('/importador', [ImportadorController::class, 'index']);
    Route::get('/graficos', [ImportadorController::class, 'chart']);
    Route::post('/importador', [ImportadorController::class, 'store'])->name('importador.store');
    Route::get('chartjs', [ChartJsController::class, 'index'])->name('chartjs.index');
    Voyager::routes();
});

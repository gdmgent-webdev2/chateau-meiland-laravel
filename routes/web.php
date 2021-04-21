<?php

use App\Http\Controllers;
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

Route::get('/', Controllers\Home\IndexController::class)->name('index');

Route::get('/clients', Controllers\Clients\IndexController::class)->name('clients.index');

Route::get('clients/create', Controllers\Clients\Create\ShowCreateController::class)->name('clients.create');
Route::post('clients/create', Controllers\Clients\Create\CreateController::class)->name('clients.create');

Route::get('clients/{client}/edit', Controllers\Clients\Update\ShowUpdateController::class)->name('clients.update');
Route::post('clients/{client}/edit', Controllers\Clients\Update\UpdateController::class)->name('clients.update');

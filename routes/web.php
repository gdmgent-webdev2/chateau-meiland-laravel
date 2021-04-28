<?php

use App\Http\Controllers\Home;
use App\Http\Controllers\Clients;
use App\Http\Controllers\Reservations;
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

Route::get('/', Home\IndexController::class)->name('home');

Route::prefix('clients')
        ->name('clients')
        ->group(function() {
            Route::get('/', Clients\IndexController::class);
            Route::get('/create', Clients\Create\ShowCreateController::class)->name('.create');
            Route::post('/create', Clients\Create\CreateController::class)->name('.create');
            Route::get('/{client}/edit', Clients\Update\ShowUpdateController::class)->name('.update');
            Route::post('/{client}/edit', Clients\Update\UpdateController::class)->name('.update');
});

Route::prefix('reservations')
        ->name('reservations')
        ->group(function() {
           Route::get('/', Reservations\IndexController::class);

           Route::get('/create/{client}', Reservations\Create\ShowCreateController::class)->name('.create.client');

           Route::post('/create', Reservations\Create\CreateController::class)->name('.create');

           Route::delete('/{reservation}', Reservations\Delete\DeleteController::class)->name('.delete');
});

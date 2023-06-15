<?php

use App\Http\Controllers\FlightController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'flights'], function () {
    Route::get('/', [FlightController::class, 'getAllFlights'])->name('flights.getAllFlights');
    Route::get('/add', [FlightController::class, 'addFlight'])->name('flights.addFlight');
    Route::post('saveFlight', [FlightController::class, 'saveFlight'])->name('flights.saveFlight');
    Route::get('/edit/{id}', [FlightController::class, 'editFlight'])->name('flights.editFlight');
    Route::get('/show/{id}', [FlightController::class, 'showFlight'])->name('flights.showFlight');
    Route::put('/update/{id}', [FlightController::class, 'updateFlight'])->name('flights.updateFlight');
    Route::get('/delete/{id}', [FlightController::class, 'deleteFlight'])->name('flights.deleteFlight');
});

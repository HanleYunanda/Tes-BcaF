<?php

use App\Http\Controllers\ConsumerDataController;
use App\Http\Controllers\SubmissionDataController;
use App\Models\ConsumerData;
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

// Route::prefix('consumer-data')->name('consumer-data.')->group(function() {
    // Route::get('/', [ConsumerDataController::class, 'index'])->name('index');
    // Route::get('/create', [ConsumerDataController::class, 'create'])->name('create');
    // Route::get('/:id', [ConsumerDataController::class, 'create'])->name('create');
    // Route::post('/', [ConsumerDataController::class, 'store'])->name('store');
    // Route::delete('/', [ConsumerDataController::class, 'destroy'])->name('destroy');
// });
Route::resource('consumer-data', ConsumerDataController::class);

Route::prefix('submission-data')->name('submission-data.')->group(function() {
    Route::get('/', [SubmissionDataController::class, 'index'])->name('index');
});

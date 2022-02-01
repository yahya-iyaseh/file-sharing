<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RedirectController;

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
Route::resource('/file', FileController::class);
Route::resource('/user', HomeController::class);
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/test', function () {
    return view('redirect.bin');
});
// Redirect Route
Route::prefix('redirect')->name('redirect.')->group(function(){
    Route::get('/bin/{id}', [RedirectController::class, 'bin'])->name('bin');
    Route::get('/forbidden', [RedirectController::class, 'bin'])->name('forbidden');
    Route::post('/file/{id}', [Redirectcontroller::class, 'file'])->name('file');
    Route::get('/file2/{id}', [Redirectcontroller::class, 'file2'])->name('file2');
});

Route::get('/{id}', [RedirectController::class, 'redirect'])->name('redirect');

require __DIR__.'/auth.php';

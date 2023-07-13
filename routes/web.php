<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LawyerController;
use App\Http\Controllers\ClientController;



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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::controller(LawyerController::class)->prefix('lawyer')->group(function (){
    Route::get('','index')->name('lawyers');
    Route::get('create','create')->name('lawyer.create');
    Route::post('store','store')->name('lawyer.store');
    Route::get('show/{id}','show')->name('lawyer.show');
    Route::get('edit/{id}','edit')->name('lawyer.edit');
    Route::put('edit/{id}','update')->name('lawyer.update');
    Route::delete('destroy/{id}','destroy')->name('lawyer.destroy');

});

Route::controller(ClientController::class)->prefix('client')->group(function (){
    Route::get('','index')->name('clients');
    Route::get('create','create')->name('client.create');
    Route::post('store','store')->name('client.store');
    Route::get('show/{id}','show')->name('client.show');
    Route::get('edit/{id}','edit')->name('client.edit');
    Route::put('edit/{id}','update')->name('client.update');
    Route::delete('destroy/{id}','destroy')->name('client.destroy');
});


require __DIR__.'/auth.php';

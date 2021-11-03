<?php

use App\Http\Controllers\ComicController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InventarioController;
use App\Http\Controllers\SucursalesController;
use App\Http\Livewire\GuestController;
use App\Http\Livewire\InventarioLiveWire;
use Database\Seeders\SucursaleSeeder;
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

Route::get('/', GuestController::class)->name('home');
Route::get('sucursales', [\App\Http\Controllers\SucursalesController::class, 'index'])->name('sucursales');
Route::get('view-sucursales', [SucursalesController::class, 'show'])->name('view_sucursales');
Route::get('add-sucursales', [SucursalesController::class, 'create'])->name('add_sucursales');
Route::post('sucursales', [SucursalesController::class, 'store'])->name('sucursales.store');

Route::get('/comic/{id}', [ComicController::class, 'comic'])->name('comic');
Route::get('comic-personaje', [ComicController::class, 'comicPersonaje']);

Route::get('dashboard',InventarioLiveWire::class)->name('inventario');
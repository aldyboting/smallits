<?php

use App\Http\Controllers\CivitasUserController;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
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

Route::group(['middleware' => ['permission:kepadatan']], function () {
    Route::get(RouteServiceProvider::CIVITAS_HOME, function () {
        return view('dashboard/dashboard-civitas');
    })->name('dashboard-civitas');
});

Route::group(['middleware' => ['permission:civitas ITS']], function () {
    Route::get(RouteServiceProvider::DPTSI_HOME, function () {
        return view('dashboard/dashboard-dptsi');
    })->name('dashboard-dptsi');

    Route::get("/viewcivitas", [CivitasUserController::class, 'getAllCivitasUser'])
        ->name('view-civitas');

    Route::post("/addcivitas/add", [CivitasUserController::class, 'store'])
        ->name('civitas.store');

    Route::get("/editcivitas/{id}/edit", [CivitasUserController::class, 'edit'])
        ->name('civitas.edit');

    Route::put("/editcivitas/{id}/update", [CivitasUserController::class, 'update'])
        ->name('civitas.update');

    Route::get("/addcivitas", function () {
        return view('civitas/add');
    })->name('add-civitas');
});

Route::group(['middleware' => ['permission:potensi penjualan']], function () {
    Route::get(RouteServiceProvider::KOMERSIL_HOME, function () {
        return view('dashboard/dashboard-komersil');
    })->name('dashboard-komersil');

    Route::get("/potensipenjualan", function () {
        return view('komersil/potensi');
    })->name('potensi-penjualan');
});

Route::group(['middleware' => ['role:Super-Admin']], function () {
    Route::get(RouteServiceProvider::HOME, function () {
        return view('dashboard/dashboard');
    })->name('dashboard');
});

require __DIR__.'/auth.php';

<?php

use App\Http\Controllers\ProjectBootcamp;
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
    return view('portofolio');
});


Route::namespace('Project')
        ->group(function(){
            Route::get('/bootcamp', [ProjectBootcamp::class, 'index'])->name('bootcamp');
            Route::get('/bengkel', [ProjectBootcamp::class, 'bengkel'])->name('bengkel');
            Route::get('/payroll', [ProjectBootcamp::class, 'payroll'])->name('payroll');
            Route::get('/HRIS', [ProjectBootcamp::class, 'hrd'])->name('hrd');
            Route::get('/cashier', [ProjectBootcamp::class, 'kasir'])->name('kasir');
            Route::get('/inventory', [ProjectBootcamp::class, 'inventory'])->name('inventory');
            Route::get('/movie', [ProjectBootcamp::class, 'movie'])->name('movie');
            Route::get('/travel', [ProjectBootcamp::class, 'travel'])->name('travel');
            Route::get('/laundry', [ProjectBootcamp::class, 'laundry'])->name('laundry');
            Route::get('/ic-education', [ProjectBootcamp::class, 'ic'])->name('ic');
            Route::get('/inventory/kpp', [ProjectBootcamp::class, 'inventoryKPP'])->name('inventory-kpp');
            Route::get('/sewa', [ProjectBootcamp::class, 'sewa'])->name('sewa');



    });

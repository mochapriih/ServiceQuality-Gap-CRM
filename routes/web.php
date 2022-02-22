<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{HomeController,LogoutController};
use App\Http\Controllers\Dirop\{
    DiropDashboardController, 
    DiropKeluhanController,
    PertanyaanKreditController,
    PertanyaanCsController,
    PertanyaanTellerController,
    DataUserNasabahController,
    DataNasabahController,
    NasabahDepositoController,
    NasabahKreditController,
    NasabahTabunganController,
    PromoController,
    PromoDepositoController,
    PromoKreditController,
    PromoTabunganController,
    DataKaryawanController,
    HasilCsController,
    HasilKreditController,
    HasilTellerController,
    };
use App\Http\Controllers\Nasabah\{
    NasabahDashboardController,
    NasabahKeluhanController,
    JawabanKreditController,
    JawabanCsController,
    JawabanTellerController,
    };
use Illuminate\Support\Facades\Auth;

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
Route::get('/', [HomeController::class, 'index'])
    ->name('landing-page');

    
Route::prefix('dirop')
    ->middleware(['auth', 'dirop'])
    ->group(function(){
        Route::get('/', [DiropDashboardController::class, 'index'])->name('dirop-dashboard');
        Route::resource('keluhandirop', DiropKeluhanController::class);
        Route::resource('kuesionerkredit', PertanyaanKreditController::class);
        Route::resource('kuesionercs', PertanyaanCsController::class);
        Route::resource('kuesionerteller', PertanyaanTellerController::class);
        Route::resource('datausernasabah', DataUserNasabahController::class);
        Route::resource('datanasabah', DataNasabahController::class);
        Route::resource('nasabahdeposito', NasabahDepositoController::class);
        Route::resource('nasabahkredit', NasabahKreditController::class);
        Route::resource('nasabahtabungan', NasabahTabunganController::class);
        Route::resource('promo', PromoController::class);
        Route::resource('promodeposito', PromoDepositoController::class);
        Route::resource('promokredit', PromoKreditController::class);
        Route::resource('promotabungan', PromoTabunganController::class);
        Route::resource('datakaryawan', DataKaryawanController::class);
        Route::resource('hasilkuesionercs', HasilCsController::class);
        Route::resource('hasilkuesionerkredit', HasilKreditController::class);
        Route::resource('hasilkuesionerteller', HasilTellerController::class);
});

Route::prefix('nasabah')
    ->middleware(['auth', 'nasabah'])
    ->group(function(){
        Route::get('/', [NasabahDashboardController::class, 'index'])->name('nasabah-dashboard');
        Route::resource('keluhan', NasabahKeluhanController::class);
        Route::resource('jawabankuesionerkredit', JawabanKreditController::class);
        Route::resource('jawabankuesionercs', JawabanCsController::class);
        Route::resource('jawabankuesionerteller', JawabantellerController::class);
});


Auth::routes(['verify' => true]);




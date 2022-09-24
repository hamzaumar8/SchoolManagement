<?php

use App\Http\Controllers\Admin\AddmissionController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\StaffController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Admin\VoucherController as AdminVoucherController;
use App\Http\Controllers\Voucher\VoucherController;
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



Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/', function () {
        return redirect()->route('dashboard');
    });
});

// Admin Routes 
Route::middleware(['auth'])->group(function () {
    Route::group(['prefix' => 'admin'], function () {
        Route::resource('students', StudentController::class);
        Route::resource('staffs', StaffController::class);
        Route::resource('addmissions', AddmissionController::class);
        Route::resource('vouchers', AdminVoucherController::class);
    });
});

// Voucher Routes
Route::get('voucher/auth', [VoucherController::class, 'create'])->name('voucher.auth');
Route::post('voucher/auth', [VoucherController::class, 'store']);

Route::middleware(['auth-voucher'])->group(function () {
    Route::group(['prefix' => 'voucher'], function () {
        Route::middleware(['auth-voucher-submit'])->group(function () {
            Route::get('addmission', [VoucherController::class, 'index'])->name('voucher.index');
        });

        Route::post('logout', [VoucherController::class, 'destroy'])->name('voucher.logout');
        Route::get('addmission/{addmission_number}/submitted', [VoucherController::class, 'submitted'])->name(('voucher.submitted'));
    });
});

require __DIR__ . '/auth.php';
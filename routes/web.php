<?php

use App\Http\Controllers\AddmissionController;
use App\Http\Controllers\AddmissionGenerateController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\StudentController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


// Admin Routes 
Route::middleware(['auth'])->group(function () {
    Route::group(['prefix' => 'admin'], function () {
        Route::resource('students', StudentController::class);
        Route::resource('staffs', StaffController::class);
        Route::resource('addmissions', AddmissionController::class);
        Route::resource('addmissiongenerate', AddmissionGenerateController::class);
    });
});

// Voucher Routes
Route::get('voucher/auth', [VoucherController::class, 'create'])->name('voucher.auth');
Route::post('voucher/auth', [VoucherController::class, 'store']);

Route::middleware(['auth-voucher'])->group(function () {
    Route::get('voucher/addmission', [VoucherController::class, 'index'])->name('voucher.index');
    Route::post('voucher/logout', [VoucherController::class, 'destroy'])->name('voucher.logout');
});

require __DIR__ . '/auth.php';
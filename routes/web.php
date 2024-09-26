<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RateController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\LiveChatController;
use App\Http\Controllers\ShipmentController;
use App\Http\Controllers\AnalyticsController;
use App\Http\Controllers\CustomerSupportController;
use App\Http\Controllers\AdminNotificationController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function () {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('addresses', AddressController::class);
    Route::resource('shipments', ShipmentController::class);
    Route::resource('payments', PaymentController::class);
    Route::resource('invoices', InvoiceController::class);
    Route::resource('admin-notifications', AdminNotificationController::class);
    Route::resource('customer-support', CustomerSupportController::class);
    Route::resource('rates', RateController::class);
    Route::resource('live-chat', LiveChatController::class);
    Route::resource('analytics', AnalyticsController::class);
});

Auth::routes();



// Auth Routes
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);


Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

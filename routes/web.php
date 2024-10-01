<?php

use App\Models\Rate;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RateController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ShipmentController;
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\ShipmentTrackingController;

Route::get('/link', function () {
    try {
        Artisan::call('storage:link');
        return "The storage link has been created successfully.";
    } catch (\Exception $e) {
        return "Failed to create the storage link: " . $e->getMessage();
    }
});


Route::get('/', [FrontendController::class, 'index'])->name('home');


Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginProcess'])->name('loginProcess');
Route::get('/register', [AuthController::class, 'signUp'])->name('register');
Route::post('/register', [AuthController::class, 'signUpProcess'])->name('registerProcess');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');




    // User Routes
    Route::group(['middleware' => ['role:user']], function () {
    Route::get('/user', [UserController::class, 'index'])->name('user');
    Route::get('user/profile', [CustomerController::class, 'my_info'])->name('user/profile');

    Route::get('personal/info', [CustomerController::class, 'personal_info'])->name('personal.info');
    Route::get('profile/kyc', [CustomerController::class, 'profile_kyc'])->name('profile.kyc');
    Route::post('kyc.update', [CustomerController::class, 'kyc_update'])->name('kyc.update');
    Route::get('password/change', [CustomerController::class, 'password_change'])->name('password.change');
    Route::post('password/update', [CustomerController::class, 'password_update'])->name('password.update');
});


// Super Admin Routes
Route::group(['middleware' => ['role:super-admin']], function () {

    Route::get('/super-admin', [SuperAdminController::class, 'index'])->name('super-admin');
    // User routes
    Route::get('admin/all-customers', [UserController::class, 'customers'])->name('admin.customers.index');
    Route::get('admin/all-agents', [UserController::class, 'agents'])->name('admin.agents.index');
    Route::get('admin/all-users', [UserController::class, 'all_users'])->name('admin.users.index');
    // Customer routes
    Route::resource('customers', CustomerController::class);

    Route::resource('addresses', AddressController::class);
    Route::resource('rates', RateController::class);
    Route::resource('shipments', ShipmentController::class);
    Route::resource('shipment_trackings', ShipmentTrackingController::class);
    Route::resource('payments', PaymentController::class);
    Route::resource('invoices', InvoiceController::class);

});

// Admin Routes
Route::group(['middleware' => ['role:admin']], function () {
    Route::get('/admin', [AdminController::class, 'index']);
});

// Agent Routes
Route::group(['middleware' => ['role:agent']], function () {
    Route::get('/agent', [AgentController::class, 'index']);
});


// Route::resource('addresses', AddressController::class);


// Route::resource('rates', RateController::class);

// Route::resource('shipments', ShipmentController::class);
// Route::resource('shipment_trackings', ShipmentTrackingController::class);


// Route::resource('payments', PaymentController::class);

// Route::resource('invoices', InvoiceController::class);

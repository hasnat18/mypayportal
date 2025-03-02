<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\GatewayController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;

Route::get('/', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {

    Route::get('/settings', function () {
        return view('setting');
    });

    // List all customers
    Route::get('/customers', [CustomerController::class, 'index'])->name('customers.index');

    // Create a new customer (show create form)
    Route::get('/customers/create', [CustomerController::class, 'create'])->name('customers.create');

    // Store a new customer (process form submission)
    Route::post('/customers', [CustomerController::class, 'store'])->name('customers.store');

    // Show a specific customer
    Route::get('/customers/{customer}', [CustomerController::class, 'show'])->name('customers.show');

    // Show the form for editing a specific customer
    Route::get('/customers/{customer}/edit', [CustomerController::class, 'edit'])->name('customers.edit');

    // Update a specific customer
    Route::put('/customers/{customer}', [CustomerController::class, 'update'])->name('customers.update');

    // Delete a specific customer
    Route::delete('/customers/{customer}', [CustomerController::class, 'destroy'])->name('customers.destroy');





    // List all payments
    Route::get('/payments', [PaymentController::class, 'index'])->name('payments.index');

    // Create a new payments (show create form)
    Route::get('/payments/create', [PaymentController::class, 'create'])->name('payments.create');

    // Store a new payments (process form submission)
    Route::post('/payments', [PaymentController::class, 'store'])->name('payments.store');

    // Show a specific payments
    Route::get('/payments/{payments}', [PaymentController::class, 'show'])->name('payments.show');

    // Show the form for editing a specific payments
    Route::get('/payments/{payments}/edit', [PaymentController::class, 'edit'])->name('payments.edit');

    // Update a specific payments
    Route::put('/payments/{payments}', [PaymentController::class, 'update'])->name('payments.update');

    // Delete a specific payments
    Route::delete('/payments/{payments}', [PaymentController::class, 'destroy'])->name('payments.destroy');

});

Route::middleware('admin')->group(function () {

    // List all brands
    Route::get('/brands', [BrandController::class, 'index'])->name('brands.index');

    // Create a new brand (show create form)
    Route::get('/brands/create', [BrandController::class, 'create'])->name('brands.create');

    // Store a new brand (process form submission)
    Route::post('/brands', [BrandController::class, 'store'])->name('brands.store');

    // Show a specific brand
    Route::get('/brands/{brand}', [BrandController::class, 'show'])->name('brands.show');

    // Show the form for editing a specific brand
    Route::get('/brands/{brand}/edit', [BrandController::class, 'edit'])->name('brands.edit');

    // Update a specific brand
    Route::put('/brands/{brand}', [BrandController::class, 'update'])->name('brands.update');

    // Delete a specific brand
    Route::delete('/brands/{brand}', [BrandController::class, 'destroy'])->name('brands.destroy');



    // List all users
    Route::get('/users', [UserController::class, 'index'])->name('users.index');

    // Create a new customer (show create form)
    Route::get('/users/create', [UserController::class, 'create'])->name('users.create');

    // Store a new customer (process form submission)
    Route::post('/users', [UserController::class, 'store'])->name('users.store');

    // Show a specific customer
    Route::get('/users/{customer}', [UserController::class, 'show'])->name('users.show');

    // Show the form for editing a specific customer
    Route::get('/users/{customer}/edit', [UserController::class, 'edit'])->name('users.edit');

    // Update a specific customer
    Route::put('/users/{customer}', [UserController::class, 'update'])->name('users.update');

    // Delete a specific customer
    Route::delete('/users/{customer}', [UserController::class, 'destroy'])->name('users.destroy');




    // List all gateways
    Route::get('/gateways', [GatewayController::class, 'index'])->name('gateways.index');

    // Create a new gateway (show create form)
    Route::get('/gateways/create', [GatewayController::class, 'create'])->name('gateways.create');

    // Store a new gateway (process form submission)
    Route::post('/gateways', [GatewayController::class, 'store'])->name('gateways.store');

    // Show a specific gateway
    Route::get('/gateways/{gateway}', [GatewayController::class, 'show'])->name('gateways.show');

    // Show the form for editing a specific gateway
    Route::get('/gateways/{gateway}/edit', [GatewayController::class, 'edit'])->name('gateways.edit');

    // Update a specific gateway
    Route::put('/gateways/{gateway}', [GatewayController::class, 'update'])->name('gateways.update');

    // Delete a specific gateway
    Route::delete('/gateways/{gateway}', [GatewayController::class, 'destroy'])->name('gateways.destroy');

});

Route::get('/invoice/{invoice_number}', [PaymentController::class, 'invoice']);

Route::get('/proceed/{invoice_number}', [PaymentController::class, 'proceed']);

Route::get('/pay/{invoice_number}', [PaymentController::class, 'pay']);

Route::get('payment/stripe/success', [PaymentController::class, 'success'])->name('stripe.success');

Route::get('payment/stripe/cancel', [PaymentController::class, 'cancel'])->name('stripe.cancel');

Route::post('payment/paypal/success', [PaymentController::class, 'paypal_success'])->name('paypal.success');

Route::get('payment/paypal/cancel', [PaymentController::class, 'paypal_cancel'])->name('paypal.cancel');




Route::get('/create-invoice', [PaymentController::class, 'createInvoice']);
Route::get('/send-invoice/{invoiceId}', [PaymentController::class, 'sendInvoice']);
Route::get('/create-invoice-and-redirect', [PaymentController::class, 'createInvoiceAndRedirect']);

require __DIR__ . '/auth.php';

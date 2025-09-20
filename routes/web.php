<?php

use App\Http\Controllers\backend\AdminAuthController;
use App\Http\Controllers\backend\InvoiceController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', [AdminAuthController::class, 'index']);
Route::get('/admin/logout', [AdminAuthController::class, 'logOut']);

Auth::routes();

Route::middleware(['auth'])->prefix('admin')->group(function () {
  
    Route::get('/dashboard', [InvoiceController::class, 'createDashboard']);
    Route::get('/invoice', [InvoiceController::class, 'invoiceBilling']);
    Route::get('/create-invoice', [InvoiceController::class, 'invoiceCreate']);
    Route::post('/create-invoice/store', [InvoiceController::class, 'invoiceStore']);
    Route::get('/invoice-view/{id}', [InvoiceController::class, 'invoiceView']);
    Route::get('/invoice-edit/{id}', [InvoiceController::class, 'invoiceEdit']);
    Route::post('/invoice-update/{id}', [InvoiceController::class, 'invoiceUpdate']);
    Route::get('/invoice-delete/{id}', [InvoiceController::class, 'invoiceDelete']);
    Route::get('/invoice-print/{id}', [InvoiceController::class, 'invoicePrint']);
});

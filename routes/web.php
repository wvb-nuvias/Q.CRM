<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('language/{locale}', function ($locale) {
    app()->setLocale($locale);
    session()->put('locale', $locale);
    return redirect()->back();
})->name('lang.switch');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/customers', function () {
        return view('customers');
    })->name('customers');
    Route::get('/contacts', function () {
        return view('contacts');
    })->name('contacts');
    Route::get('/products', function () {
        return view('products');
    })->name('products');
    Route::get('/subscriptions', function () {
        return view('subscriptions');
    })->name('subscriptions');
    Route::get('/incidents', function () {
        return view('incidents');
    })->name('incidents');
    Route::get('/helpcenter', function () {
        return view('helpcenter');
    })->name('helpcenter');
});

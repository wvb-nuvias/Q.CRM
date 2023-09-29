<?php

use Illuminate\Support\Facades\Route;

use App\Livewire\Pages\Contacts;
use App\Livewire\Pages\Customers;
use App\Livewire\Pages\Dashboard;
use App\Livewire\Pages\Products;
use App\Livewire\Pages\Subscriptions;

use App\Livewire\Pages\Helpcenter;
use App\Livewire\Pages\Incidents;
use App\Livewire\Pages\Kb;

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
    Route::get('/contacts',Contacts::class)->name('contacts');
    Route::get('/customers',Customers::class)->name('customers');    
    Route::get('/dashboard',Dashboard::class)->name('dashboard');
    Route::get('/products',Products::class)->name('products');
    Route::get('/subscriptions',Subscriptions::class)->name('subscriptions');
    
    Route::get('/helpcenter',Helpcenter::class)->name('helpcenter');
    Route::get('/incidents',Incidents::class)->name('incidents');
    Route::get('/kb',Kb::class)->name('kb');
    
});

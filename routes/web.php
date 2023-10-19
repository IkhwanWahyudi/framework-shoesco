<?php

use App\Models\Product;
use App\Models\Transaction;
use App\Models\account;
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
    return view('home');
})->name('home');

Route::get('/auth', function () {
    return view('auth.auth');
})->name('login');

Route::get('/customer/home', function () {
    return view('customer.home', [
        "product" => Product::all()
    ]);
})->name('buy');

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard', [
        "product" => Product::all()
    ]);
})->name('admin');

Route::get('/admin/transaction', function () {
    return view('admin.transaction', [
        "transaction" => Transaction::all()
    ]);
})->name('transaction');

Route::get('/admin/account', function () {
    return view('admin.account', [
        "account" => account::all()
    ]);
})->name('account');

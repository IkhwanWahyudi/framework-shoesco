<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Models\Product;
use App\Models\Transaction;
use App\Models\User;
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

Route::get('/auth/regis', function () {
    return view('auth.regis');
})->name('regis');

Route::post(
    '/register/action',
    [AuthController::class, 'registerAction']
)->name('register.action');

Route::post(
    '/login/action',
    [AuthController::class, 'loginAction']
)->name('login.action');

Route::middleware('auth')->group(function () {
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

    Route::get('/admin/add', function () {
        return view('admin.add');
    })->name('add');

    Route::get('/admin/account', function () {
        $accounts = User::where('role', '!=', 'admin')->get();
        return view('admin.account', [
            "account" => $accounts
        ]);
    })->name('account');
});

Route::controller(ProductController::class)->group(function () {
    Route::post('/admin/add/action', 'store')->name('admin.store');
    Route::get('/admin/edit/{id}', 'edit')->name('admin.edit');
    Route::post('/admin/edit/{id}/action','update')->name('admin.update');
    Route::post('/admin/dashboard/delete/{id}/action', 'delete')->name('admin.delete');
});

Route::get('/logout', [
    AuthController::class, 'logout'
])->name('logout');

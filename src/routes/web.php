<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/contacts', [ContactController::class, 'index'])->name('contacts.index');
Route::post('/contacts/confirm', [ContactController::class, 'confirm'])->name('contacts.confirm');
Route::post('/contacts/send', [ContactController::class, 'send'])->name('contacts.send');
Route::get('/contacts/thanks', [ContactController::class, 'thanks'])->name('thanks');
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');

use App\Http\Controllers\AuthController;

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/register', [UserController::class, 'showRegistrationForm'])->name('register');

use App\Http\Controllers\AdminController;

Route::prefix('admin')->name('admin.')->group(function () {
    // /admin にアクセスしたら一覧ページへリダイレクト
    Route::get('/', function () {
        return redirect()->route('admin.contacts.index');
    })->name('dashboard');

    // 一覧ページ
    Route::get('/contacts', [AdminController::class, 'index'])->name('contacts.index');

    // 詳細ページ
    Route::get('/contacts/{id}', [AdminController::class, 'show'])->name('contacts.show');
    // エクスポート用ルート
    Route::get('/contacts/export', [AdminController::class, 'export'])->name('contacts.export');

});

use App\Http\Controllers\UserController;

Route::get('/register', [UserController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [UserController::class, 'register'])->name('register.post');



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



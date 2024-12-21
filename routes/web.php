<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\InferenceController;
use App\Http\Controllers\SymptomController;
use App\Http\Controllers\DiagnosisController;




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

// Halaman/login
Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login']);

// Halaman register
Route::get('register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('register', [AuthController::class, 'register']);

// Logout
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/', function () {
    return view('landing-page.index');
})->name('index');


// Rute untuk halaman user yang hanya bisa diakses oleh pengguna yang terautentikasi
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/diagnosis', [DiagnosisController::class, 'showForm'])->name('diagnosis.form');

    Route::post('/diagnosis', [DiagnosisController::class, 'generateResult'])->name('diagnosis.generate');

    Route::get('/diagnosis/confirm', [DiagnosisController::class, 'confirm'])->name('diagnosis.confirm');

    Route::get('/riwayat', [DiagnosisController::class, 'showHistory'])->name('riwayat.history');

    Route::get('/akurasi', [DiagnosisController::class, 'showAccuracy'])->name('diagnosis.showAccuracy');


Route::post('/diagnosis/delete', [DiagnosisController::class, 'delete'])->name('diagnosis.delete');


});


Route::middleware('admin')->prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
});

Route::match(['get', 'post'], '/botman', 'App\Http\Controllers\BotManController@handle');



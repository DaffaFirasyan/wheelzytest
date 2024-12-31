<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\User\PesanController;
use App\Http\Controllers\User\KatalogController;
use App\Http\Controllers\User\ArtikelController;
use App\Http\Controllers\User\FaqController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminFormController;
use App\Http\Controllers\Admin\AdminKatalogController;
use App\Http\Controllers\Admin\AdminFaqController;
use App\Http\Controllers\Admin\AdminArtikelController;
use App\Http\Controllers\Admin\ManageUserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// User Routes
Route::middleware('auth', 'userMiddleware')->group(function(){
    
    Route::get('dashboard', [UserController::class, 'index'])->name('dashboard');
    Route::get('pesan', [PesanController::class, 'index'])->name('pesan');
    Route::get('katalog', [KatalogController::class, 'index'])->name('katalog');
    Route::get('artikel', [ArtikelController::class, 'index'])->name('artikel');
    Route::get('/faq', [AdminFaqController::class, 'index2'])->name('user.faq');

});

// Admin Routes
Route::middleware('auth', 'adminMiddleware')->group(function(){
    
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/admin/form', [AdminFormController::class, 'index'])->name('admin.form');
    Route::get('/admin/katalog', [AdminKatalogController::class, 'index'])->name('admin.katalog');
    Route::get('/admin/artikel', [AdminArtikelController::class, 'index'])->name('admin.artikel');
    Route::get('/admin/user', [ManageUserController::class, 'index'])->name('admin.user');

    // FAQ Admin
    Route::get('/admin/faq', [AdminFaqController::class, 'index'])->name('admin.faq');
    Route::get('/admin/faqs/create', [AdminFaqController::class, 'create'])->name('admin.faq.create');
    Route::post('/admin/faqs', [AdminFaqController::class, 'store'])->name('admin.faq.store');
    Route::get('/admin/faqs/{id}/edit', [AdminFaqController::class, 'edit'])->name('admin.faq.edit');
    Route::put('/admin/faqs/{id}', [AdminFaqController::class, 'update'])->name('admin.faq.update');
    Route::delete('/admin/faqs/{id}', [AdminFaqController::class, 'destroy'])->name('admin.faq.destroy');
    
});
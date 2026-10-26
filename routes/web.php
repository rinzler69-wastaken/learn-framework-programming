<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes - UTS Pemrograman Berbasis Framework (Gasal 2026/2027)
| Mahasiswa NPM Ganjil: Fitness (Landing) & StudioAdmin (Admin)
|--------------------------------------------------------------------------
*/

// ==========================================
// ROUTE LANDING PAGE (FITNESS TEMPLATE)
// ==========================================
// ini buat user biasa / beranda
Route::get('/', [LandingController::class, 'index'])->name('landing.index');
Route::get('/about', [LandingController::class, 'about'])->name('landing.about');
Route::get('/feature', [LandingController::class, 'feature'])->name('landing.feature');
Route::get('/course', [LandingController::class, 'course'])->name('landing.course');
Route::get('/blog', [LandingController::class, 'blog'])->name('landing.blog');
Route::get('/contact', [LandingController::class, 'contact'])->name('landing.contact');


// ==========================================
// ROUTE ADMIN PANEL (STUDIOADMIN TEMPLATE)
// ==========================================
// routingan admin dikelompokin pake prefix biar ga tabrakan sm url landing
Route::prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.index');
    Route::get('/calendar', [AdminController::class, 'calendar'])->name('admin.calendar');
    Route::get('/form-elements', [AdminController::class, 'formElements'])->name('admin.form_elements');
    Route::get('/table-plugins', [AdminController::class, 'tablePlugins'])->name('admin.table_plugins');
    Route::get('/ui-modal-notification', [AdminController::class, 'uiModalNotification'])->name('admin.ui_modal_notification');
    Route::get('/login', [AdminController::class, 'login'])->name('admin.page_login');
});

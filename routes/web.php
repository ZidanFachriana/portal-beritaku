<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Paw\ArtikelController;
use App\Http\Controllers\Paw\TagController;
use App\Http\Controllers\Paw\UsersController;
use Illuminate\Support\Facades\Route;



Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('posts/{artikel:slug}', [HomeController::class, 'single'])->name('artikel.show');
Route::get('kategori/{tag:slug}', [HomeController::class, 'tags_single'])->name('single.tag');
Route::get('search/judul/', [HomeController::class, 'search'])->name('single.search');




                    

Route::middleware('auth')->group(function () {
    Route::get('dashboard', DashboardController::class)->name('dashboard');

    Route::prefix('penulis')->middleware('role:admin')->group(function() {

    Route::get('table', [UsersController::class, 'table'])->name('users.table');
    
    Route::get('create', [RegisteredUserController::class, 'create'])->name('users.create');
    
    Route::post('create', [RegisteredUserController::class, 'store']);
    });

    Route::prefix('tags')->group(function () {

        Route::middleware('permission:read tag')->group(function() {
            Route::get('/', [TagController::class, 'table'])->name('tags.table');
        });
       Route::middleware('role:admin')->group(function() {
         Route::get('create', [TagController::class, 'create'])->name('tags.create');
        Route::post('create', [TagController::class, 'store']);
        Route::get('edit/{tag:nama}', [TagController::class, 'edit'])->name('tags.edit');
        Route::put('edit/{tag:nama}', [TagController::class, 'update']);
        Route::delete('delete/{tag:nama}', [TagController::class, 'destroy'])->name('tags.delete');
        });
        Route::prefix('artikel')->middleware('permission:create artikel')->group(function () {
            Route::get('create', [ArtikelController::class, 'create'])->name('artikels.create');
            Route::post('create', [ArtikelController::class, 'store']);
            Route::get('table', [ArtikelController::class, 'table'])->name('artikels.table');
            Route::get('{artikel:slug}/edit', [ArtikelController::class, 'edit'])->name('artikels.edit');
            Route::put('{artikel:slug}/edit', [ArtikelController::class, 'update']);
            Route::delete('{artikel:slug}/delete', [ArtikelController::class, 'destroy'])->name('artikels.delete');
        });
    });
});

require __DIR__.'/auth.php';

<?php

use App\Http\Controllers\MenuController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MenuController::class, 'index']);
Route::get('/admin', [MenuController::class, 'admin']);
Route::post('/admin/store', [MenuController::class, 'store'])->name('admin.store');
Route::delete('/admin/delete/{id}', [MenuController::class, 'delete'])->name('admin.delete');
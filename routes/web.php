<?php

use App\Http\Controllers\ProfileController;
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
    return view('index');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/portfolio', function () {
    return view('admin.portfolio');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/blog', function () {
    return view('admin.blog');
})->middleware(['auth', 'verified'])->name('admin.blog');

Route::get('/boost', function () {
    return view('admin.bootstrap-elements');
})->middleware(['auth', 'verified'])->name('admin.bootstrap-elements');

Route::get('/Typography', function () {
    return view('admin.typography');
})->middleware(['auth', 'verified'])->name('admin.typography');

Route::get('/Forms', function () {
    return view('admin.forms');
})->middleware(['auth', 'verified'])->name('admin.forms');


Route::get('/boost-grid', function () {
    return view('admin.bootstrap-grid');
})->middleware(['auth', 'verified'])->name('admin.bootstrap-grid');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


});

require __DIR__.'/auth.php';

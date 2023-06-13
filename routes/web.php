<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\TechnologyController;
use App\Http\Controllers\Admin\CollaboratorController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'verified'])->name('admin.')->prefix('admin')->group(function ()
{
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('/posts', PostController::class)->parameters(['posts' => 'post:slug']);
    Route::resource('/technologies', TechnologyController::class)->parameters(['technologies' => 'technology:id']);
    Route::resource('/collaborators', CollaboratorController::class)->parameters(['technologies' => 'technology:id']);
});

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';

Route::fallback(function()
{
    return redirect()->route('home');
});

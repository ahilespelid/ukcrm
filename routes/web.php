<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

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
//Route::view('/', 'auth.login');
//Route::get('/admin', function () {
//    Route::view('/admin', 'admin.index');
//})->middleware(['auth', 'role:super-admin']);


Route::get('/', [\App\Http\Controllers\DashboardController::class,'index'])->middleware(['auth'])->name('dashboard');

Route::prefix('admin')->group(function(){
    Route::get('/', [AdminController::class,'index'])->name('admin');
    Route::get('/users', [AdminController::class,'users'])->name('users');
    Route::patch('/users/{$id}', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/users/{$id}', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/users/roles', [AdminController::class,'roles'])->name('roles');
    Route::get('/users/{id}', function (string $id) {
        return AdminController::editUsers($id);
    })->name('users.profile');
    Route::get('/reklama', [AdminController::class,'reklama'])->name('reklama');
    Route::get('/reklama/{id}', function (string $id) {
        return AdminController::editReklama($id);
    })->name('reklama.edit');
})->middleware(['auth', 'role']);

Route::prefix('lk')->group(function(){
    Route::get('/', [\App\Http\Controllers\OwnerController::class,'index'])->name('lk');
    Route::get('/indication', [\App\Http\Controllers\OwnerController::class,'indication'])->name('indication');
    Route::get('/charges', [\App\Http\Controllers\OwnerController::class,'charges'])->name('charges');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
})->middleware(['auth', 'role:owner']);

require __DIR__.'/auth.php';

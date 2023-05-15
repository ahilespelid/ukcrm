<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use \App\Http\Controllers\OwnerController;
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


Route::get('/', [\App\Http\Controllers\DashboardController::class,'index'])->middleware(['auth'])->name('home');

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
    Route::get('/objects', [AdminController::class,'objects'])->name('objects');
    Route::get('/accruals', [AdminController::class,'accruals'])->name('accruals');
    Route::get('/payments', [AdminController::class,'payments'])->name('payments');
    Route::get('/file-manager/import', [AdminController::class,'import'])->name('fm_import');
    Route::get('/file-manager/export', [AdminController::class,'export'])->name('fm_export');
    Route::get('/file-manager/setting', [AdminController::class,'iesetting'])->name('fm_setting');
    Route::get('/company', [AdminController::class,'company'])->name('company');
    Route::get('/settings', [AdminController::class,'settings'])->name('settings');
})->middleware(['auth', 'role']);

Route::prefix('lk')->group(function(){
    Route::get('/', [OwnerController::class,'index'])->name('lk');
    Route::get('/indication', [OwnerController::class,'indication'])->name('indication');
    Route::get('/charges', [OwnerController::class,'charges'])->name('charges');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/reklama', [OwnerController::class,'reklama'])->name('reklama');
    Route::get('/message', [OwnerController::class,'message'])->name('message');
})->middleware(['auth', 'role:owner']);

require __DIR__.'/auth.php';

<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use \App\Http\Controllers\OwnerController;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\HousesController;
use App\Http\Controllers\ReklamaController;
use App\Http\Controllers\AccrualsController;
use App\Http\Controllers\PaymentsController;
use App\Http\Controllers\FmController;
use App\Http\Controllers\CompanyController;


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

Route::get('/', [\App\Http\Controllers\DashboardController::class,'index'])->middleware(['auth'])->name('home');

Route::prefix('admin')->group(function(){
    Route::get('/', [AdminController::class,'index'])->name('admin');
    //Route::get('/users', [AdminController::class,'users'])->name('users');
    Route::get('/users/roles', [AdminController::class,'roles'])->name('roles');
    Route::resource('/users', UsersController::class);
    Route::resource('/objects', HousesController::class);
    Route::resource('/reklama', ReklamaController::class);
    Route::resource('/accruals', AccrualsController::class);
    Route::resource('/payments', PaymentsController::class);
    Route::get('/file-manager/import', [FmController::class,'import'])->name('fm_import');
    Route::get('/file-manager/export', [FmController::class,'export'])->name('fm_export');
    Route::get('/file-manager/setting', [FmController::class,'setting'])->name('fm_setting');
    //import | export
    Route::get('users-export', [UsersController::class, 'export'])->name('users.export');
    Route::post('users-import', [UsersController::class, 'import'])->name('users.import');
    Route::post('/file-manager/import-ok', [FmController::class,'import_post'])->name('import.post');

    Route::get('/company', [CompanyController::class,'index'])->name('company');
    //Route::get('/settings', [AdminController::class,'settings'])->name('settings');
})->middleware(['auth', 'role']);

Route::prefix('lk')->group(function(){
    /*
    Route::get('/', [OwnerController::class,'index'])->name('lk');
    Route::get('/indication', [OwnerController::class,'indication'])->name('indication');
    Route::get('/charges', [OwnerController::class,'charges'])->name('charges');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/reklama', [OwnerController::class,'reklama'])->name('reklama');
    Route::get('/message', [OwnerController::class,'message'])->name('message');
    */
})->middleware(['auth', 'role:owner']);

require __DIR__.'/auth.php';

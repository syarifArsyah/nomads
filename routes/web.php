<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\TravelPackageController;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/',[HomeController::class, 'index']);

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');
// Route::get('admin/home',[HomeController::class,'handleAdmin'])->name('admin.route')->middleware('admin');

Route::prefix('admin')
    // ->namespace('Admin')
    ->middleware(['auth','admin'])
    ->group(function(){
        Route::get('/',[HomeController::class,'handleAdmin'])
        ->name('admin.route');
        Route::resource('travel-package',TravelPackageController::class);
        // Route::get('/travel-package',[TravelpackagesController::class,'index'])
        // ->name('travel-package.index');
        // Route::get('/travel-package/create',[TravelpackagesController::class,'create'])
        // ->name('travel-package.create');
        // Route::resource('travel-package', TravelpackageController::class);
    });

Auth::routes(['verify' => true]);
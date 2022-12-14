<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\admin\MarriageController;

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
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('/listuser', function () {
//     return view('listuser');
// })->middleware(['auth', 'verified'])->name('listuser');

// Route::get('/edituser/{id}', function(){
//     return view('edituser');
// })->middleware(['auth', 'verified'])->name('edituser');



Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [MarriageController::class, 'index'])->name('dashboard');
    Route::get('/users', [MarriageController::class, 'view'])->name('user.view');
    Route::post('/users', [MarriageController::class, 'store'])->name('store.user');
    Route::post('/deleteuser/{id}', [MarriageController::class, 'delete'])->name('delete.view');
    Route::get('/edituser/{id}', [MarriageController::class, 'edit'])->name('user.edit');
    Route::post('/edituser/{id}', [MarriageController::class, 'storedetails'])->name('storedetails.view');
});

Route::post('/edituser/guest/{id}', [MarriageController::class, 'storedetails_guest'])->name('storedetails.view.guest');
Route::get('/form/{id}', [MarriageController::class, 'fromadd'])->name('frontend.fromadd');
Route::get('/share/{slug}', [MarriageController::class, 'frontendview'])->name('frontend.view');
Route::post('/slugchecker', [MarriageController::class, 'slugchecker'])->name('slugchecker');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';



Route::get('/clear', function() {

    Artisan::call('cache:clear');

  

    dd("Cache Clear All");

});
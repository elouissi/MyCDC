<?php

use App\Http\Controllers\Cahier_de_chargeController;
use App\Http\Controllers\ChatgptController;
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
    return view('auth.login');
})->middleware('guest');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::middleware('auth')->group(function () {
   
    Route::get('/siteVitrine', [Cahier_de_chargeController::class,'siteVitrine'])->name('siteVitrine');
    Route::get('/mobile', [Cahier_de_chargeController::class,'mobile'])->name('mobile');
    Route::get('/e-commerce', [Cahier_de_chargeController::class,'ecommerce'])->name('e-commerce');
    Route::post('/create',[ChatgptController::class,'index'])->name('create.chatgpt');

});
require __DIR__.'/auth.php';

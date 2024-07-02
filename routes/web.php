<?php

use App\Http\Controllers\Cahier_de_chargeController;
use App\Http\Controllers\ChatgptController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use OpenAI\Laravel\Facades\OpenAI;


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
    Route::get('/home', [Cahier_de_chargeController::class, 'accueil'])->name('accueil');

 
    //web
    Route::get('/siteVitrine', [Cahier_de_chargeController::class,'siteVitrine'])->name('siteVitrine');
    Route::get('/ecommerce', [Cahier_de_chargeController::class,'Ecommerce'])->name('ecommerce');
    Route::get('/Blog', [Cahier_de_chargeController::class,'Blog'])->name('Blog');
    Route::get('/Affiliation', [Cahier_de_chargeController::class,'Affiliation'])->name('Affiliation');

    //mobile
    Route::get('/App_e_commerce', [Cahier_de_chargeController::class,'App_e_commerce'])->name('App_e_commerce');
    Route::get('/E_learning', [Cahier_de_chargeController::class,'E_learning'])->name('E_learning');
    Route::get('/Service_X', [Cahier_de_chargeController::class,'Service_X'])->name('Service_X');
    //list des utilisateurs
    Route::get('/Liste des cahier des charges', [Cahier_de_chargeController::class,'List'])->name('List');

    //submit formulaire
    Route::post('/create',[ChatgptController::class,'index'])->name('create.chatgpt');
    //generation PDF
    Route::get('/generate-pdf', [PDFController::class, 'generatePDF'])->name('generate.pdf');


});
Route::middleware(['auth', 'role:admin'])->group(function () {

    Route::get('/script',[Cahier_de_chargeController::class,'script'])->name('script');

}) ;
 
require __DIR__.'/auth.php';

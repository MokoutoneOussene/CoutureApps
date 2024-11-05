<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\DepController;
use App\Http\Controllers\MesureController;
use App\Http\Controllers\ModeleController;
use App\Http\Controllers\PayementController;
use App\Http\Controllers\PersonnelController;
use App\Http\Controllers\RdvController;

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

// Route::get('/', function () {
//     return view('pages.index');
// });

Route::get('formulaire',[PagesController::class,'forms'])->name('formulaire');
Route::get('liste',[PagesController::class,'liste'])->name('listes');
Route::post('enregistrement',[PagesController::class,'store'])->name('enregistrement');





Route::get('/',[PagesController::class,'accueil'])->name('accueil');

Route::resource('gestion_clients', ClientController::class);
Route::post('updateClient/{id}',[ClientController::class,'update']);
Route::get('destroyClient/{id}',[ClientController::class,'destroy']);

Route::resource('gestion-modeles', ModeleController::class);
Route::get('destroyModele/{id}',[ModeleController::class,'destroy']);
Route::post('updateModele/{id}',[ModeleController::class,'update']);

Route::resource('gestion-mesures', MesureController::class);
Route::post('updateMesure/{id}',[MesureController::class,'update']);
Route::get('destroyMesure/{id}',[MesureController::class,'destroy']);

Route::resource('gestion-rdv', RdvController::class);
Route::post('updateRdv/{id}',[RdvController::class,'update']);
Route::get('destroyRdv/{id}',[RdvController::class,'destroy']);

Route::resource('gestion-personnel', PersonnelController::class);
Route::get('destroyPers/{id}',[PersonnelController::class,'destroy']);
Route::post('updatePerso/{id}',[PersonnelController::class,'update']);

Route::resource('gestion-depense', DepController::class);
Route::post('updateDeps/{id}',[DepController::class,'update']);
Route::get('destroyDeps/{id}',[DepController::class,'destroy']);

Route::resource('gestion-payement', PayementController::class);
Route::get('credits',[PayementController::class,'credit'])->name('credit');
Route::post('updatePayement/{id}',[PayementController::class,'update']);
Route::get('destroyPayement/{id}',[PayementController::class,'destroy']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

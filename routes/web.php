<?php

use App\Http\Controllers\EtudiantController;
use Illuminate\Support\Facades\Route;
App\Providers\FortifyServiceProvider::class;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

Route::get('/', function () {
    return view('welcome');
});




Route::group(['middleware' => ['auth']], function () {
    Route::get('/etudiants', [EtudiantController::class, 'index'])->name('etudiant');
    Route::get('/etudiants/create', [EtudiantController::class, 'create'])->name('etudiant.create');
    Route::post('/etudiants/store', [EtudiantController::class, 'store'])->name('etudiant.ajouter');
    Route::put('/etudiants/{etudiant}', [EtudiantController::class, "update"])->name('etudiant.update');
    Route::get('/etudiants/{etudiant}', [EtudiantController::class, "edit"])->name('etudiant.edit');
    Route::delete('/delete/{etudiant}', [EtudiantController::class, "delete"])->name('etudiant.delete');
    Route::get('/show/{etudiant}', [EtudiantController::class, "show"])->name('etudiant.show');
});

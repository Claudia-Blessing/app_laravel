<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;




Route::get('/', [StudentController::class, 'index'])->name('index'); // Formulaire d'ajout
Route::get('show/{id}', [App\Http\Controllers\StudentController::class, 'show'])->name('show');
Route::get('create', [App\Http\Controllers\StudentController::class, 'create'])->name('create'); // Formulaire d'ajout
Route::post('create', [App\Http\Controllers\StudentController::class, 'store'])->name('store'); // Enregistrer un étudiant
Route::get('modifier/{id}', [App\Http\Controllers\StudentController::class, 'edit'])->name('edit'); // Formulaire de modification
Route::put('modifier/{id}', [App\Http\Controllers\StudentController::class, 'update'])->name('update'); // Mettre à jour un étudiant
Route::delete('supprimer/{id}', [App\Http\Controllers\StudentController::class, 'destroy'])->name('destroy'); // Supprimer un étudiant
    
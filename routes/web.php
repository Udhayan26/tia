<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InscriptionController;

Route::get('/', [InscriptionController::class, 'index']);
Route::get('/api/dashboard', [InscriptionController::class, 'getDashboard']);

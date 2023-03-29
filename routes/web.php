<?php

use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\RegistrationController;
use App\Models\Application;
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


Route::get('/events', [EventController::class, 'list']);

Route::get('/', [EventController::class, 'list']);

Route::get('/event/{id}', [EventController::class, 'show']);

Route::post('/event/{id}', [ApplicationController::class, 'create']);

Route::get('/event/{id}/applications', [ApplicationController::class, 'list']);

Route::get('/login', [RegistrationController::class, 'showlogin']);

Route::post('/login', [RegistrationController::class, 'login']);

Route::get('/register', [RegistrationController::class, 'show']);

Route::post('/register', [RegistrationController::class, 'create']);

Route::get('/create-event', [EventController::class, 'create']);


<?php

use App\Http\Controllers\TicketController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/tickets/search/{code}/active', [TicketController::class, 'searchActive'])->name('tickets.searchActive');

Route::get('/users/search/{email}/tickets', [UserController::class, 'getTicketsByEmail'])->name('users.getTicketsByEmail');

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MessageController;

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

Route::get('/', [HomeController::class, 'Index']);
Route::get('/messages', [MessageController::class, 'Index']);
Route::post('/messages/create', [MessageController::class, 'submitCreate'])->name('submitCreate');
Route::get('/messages/create', [MessageController::class, 'showCreate'])->name('showCreate');
Route::get('/{page}', function ($slug) {
    return (new HomeController())->showPage($slug);
});

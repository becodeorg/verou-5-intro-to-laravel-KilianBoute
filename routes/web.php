<?php

use App\Http\Controllers\PokemonController;
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

Route::get('/', [HomeController::class, 'index']);
Route::get('/messages', [MessageController::class, 'index'])->name('messages');
Route::post('/messages', [MessageController::class, 'store'])->name('storeMessage');
Route::get('/messages/create', [MessageController::class, 'showCreate'])->name('showCreate');
// Route::get('/{page}', function ($slug) {
//     return (new HomeController())->showPage($slug);
// });
Route::get("/pokemon", [PokemonController::class, "index"])->name('pokemon');
// Route::get("/pokemon/{pokemon}", [function ($slug) {
//     return (new PokemonController())->show($slug);
// }])->name('showPokemon');
Route::get("/pokemon/{pokemon}", [PokemonController::class, 'show'])->name('showPokemon');
Route::post("/pokemon/create", [PokemonController::class, "create"])->name("createPokemon");

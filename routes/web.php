<?php

use App\Http\Controllers\IngredientController;
use Illuminate\Support\Facades\Route;

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


Route::get('/', [IngredientController::class, 'home'])->name('home');
Route::get('/create', [IngredientController::class, 'create'])->name('create');
Route::post('/store/aliment', [IngredientController::class, 'store'])->name('store.ingredient');
Route::get('/ingredient/{id}', [IngredientController::class, 'show'])->name('show.ingredient');
Route::get('/delete/{id}', [IngredientController::class, 'delete'])->name('delete.aliment');

/*
Route::get('edit/{id}, [Inged::class, 'edit])
Route::post('update/{id}[ingred::class, 'update'])

*/
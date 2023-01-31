<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\sellController;
use App\Http\Controllers\itemsController;

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

//Route for home
Route::get('/', function () {
    return view('welcome');
});  


//Route for home
Route::get('/home', [homeController::class, 'index'])->name('/home');
 
//Route for main page
Route::get('/', [homeController::class, 'main']);

//Route for product section
/* Route::get('home/{product}', [App\Http\Controllers\homeController::class, 'item']); */


//Route for sell view
Route::get('sell', [sellController::class, 'sellProduct'])->name('sell');

//Route for Sell form which is defined with the name sell
Route::post('sellproducts', [sellController::class, 'sell']);

//Route for details
Route::get('details/{id}', [homeController::class, 'details']);

//Route for listed products
Route::get('items', [itemsController::class, 'index'])->name('items');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


//Route for logout
/* Route::post('/logout', [homeController::class, 'logout'])->name('logout'); */

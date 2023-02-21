<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\sellController;
use App\Http\Controllers\productController;
use App\Http\Controllers\footerController;

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
    return view('/home');
});  


//Route for home
Route::get('/home', [homeController::class, 'index'])->name('/home');
 
//Route for main page
Route::get('/', [homeController::class, 'main']);

//Route for phone page
Route::get('/phone', [homeController::class, 'phone']);

//Route for product section
/* Route::get('home/{product}', [App\Http\Controllers\homeController::class, 'item']); */


//Route for product controller
Route::get('product', [productController::class, 'index']);

//Route for product view
Route::get('item', [productController::class, 'productList']);

//Route for search product
Route::post('search', [productController::class, 'search'])->name('search');

//Route for delete product
Route::delete('delete/{id}', [productController::class, 'destroy'])->name('delete');

//Route for update product view
Route::get('update/{id}', [productController::class, 'update'])->name('update');

//Route for update product controller
Route::post('updateproducts/{id}', [productController::class, 'updateproducts'])->name('updateproducts');

//Route for sell view
Route::get('sell', [sellController::class, 'sellProduct'])->name('sell');

//Route for Sell form which is defined with the name sell
Route::post('sellproducts', [sellController::class, 'sell']);

//Route for details
Route::get('details/{id}', [homeController::class, 'details']);




Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/home', function () {
        return view('/home');
    })->name('/home');
});



//Route for logout
/* Route::post('/logout', [homeController::class, 'logout'])->name('logout'); */


//Route for phone category blade
Route::get('all', [homeController::class, 'all'])->name('all');

//Route for phone category blade
Route::get('phone', [homeController::class, 'phone'])->name('phone');

//Route for electronics category blade
Route::get('electronic', [homeController::class, 'electronic'])->name('electronic');

//Route for furniture category blade
Route::get('furniture', [homeController::class, 'furniture'])->name('furniture');

//Route for computer category blade
Route::get('computer', [homeController::class, 'computer'])->name('computer');

//Route for fashion category blade
Route::get('fashion', [homeController::class, 'fashion'])->name('fashion');

//Route for sport category blade
Route::get('sport', [homeController::class, 'sport'])->name('sport');


//Footer routes

//About us page
Route::get('about', [footerController::class, 'about'])->name('about');

//Safety page
Route::get('safety', [footerController::class, 'safety'])->name('safety');

//Privacy page
Route::get('privacy', [footerController::class, 'privacy'])->name('privacy');

//Contact Us page
Route::get('contact', [footerController::class, 'contact'])->name('contact');


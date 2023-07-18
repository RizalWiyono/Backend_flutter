<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth:admin'])->name('admin.dashboard');

Route::get('/admin/client_management', function () {
    return view('admin.client_management');
})->middleware(['auth:admin'])->name('admin.client_management');


require __DIR__.'/adminauth.php';

Route::get('/client/dashboard', function () {
    return view('client.dashboard');
})->middleware(['auth:client'])->name('client.dashboard');

Route::get('/client/product', function () {
    return view('client.product');
})->middleware(['auth:client'])->name('client.product');

// Route::get('/client/add-product', function () {
//     return view('client.add-product');
// })->middleware(['auth:client'])->name('client.add-product');

Route::controller(ProductController::class,)->group(function(){
    Route::get('client/add-product','create') ->name('client.add-product');
    Route::post('client/add-product','store') ->name('client.add-product');

    // Route::get('client.add-product','store') ->name('client.add-product');

});


require __DIR__.'/clientauth.php';



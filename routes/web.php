<?php
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SalesController;
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


Route::get('/', function () {
    return view('welcome');
});

Route::get('create' ,[ProductController::class,'create'])->name( 'product.create');
Route::post('create', [ProductController::class, 'store'])->name( 'product.store');

//Go To Sales History Page
Route::get('saleshistorypage' ,[SalesController::class,'goToSales'])->name('sales.history');
Route::post('saleshistorypage', [SalesController::class, 'addToSales'])->name( 'sales.addTransaction');
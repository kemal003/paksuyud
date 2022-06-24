<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\ItemUploaderController;

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

Route::get('/', [ItemController::class, 'index']);
Route::view('orderForm', 'orderForm');

Route::group(['middleware' => ['auth']], function() {
    Route::get('/dashboard', [ItemController::class, 'showItem'])->name('dashboard');
    Route::get('/input', [ItemController::class, 'inputItem'])->name('input');
    Route::post('/input', [ItemUploaderController::class, 'itemsUploadPost'])->name('itemUpload');
});

require __DIR__.'/auth.php';

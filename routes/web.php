<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OnoController;
use App\Http\Controllers\CategoryController;
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



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::controller(OnoController::class)->middleware(['auth'])->group(function(){
    Route::get('/','index')->name('index');
});

Route::get('/onomatopes/create', [OnoController::class, 'create']);//投稿フォームの表示
Route::get('/onomatopes/{onomatope}',[OnoController::class ,'show']);//投稿詳細画面の表示
Route::post('/onomatopes', [OnoController::class, 'store']);//画像を含めた投稿の保存処理
Route::delete('/onomatopes/{onomatope}',[OnoController::class ,'delete']);
Route::post('/onomatopes/{ono}/update-check', [OnoController::class, 'updateCheck']);
Route::get('/categories/{category}', [CategoryController::class,'index'])->middleware('auth');




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
//状態更新用のルート




require __DIR__.'/auth.php';

<?php

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
//Route::any('/test',[suisei::class,'test']);
//
//
//

Route::get('/',[\App\Http\Controllers\TodoController::class,'index']);

Route::get('/oen',[\App\Http\Controllers\TodoController::class,'oen'])->name('see_oen');

Route::get('/index',[\App\Http\Controllers\TodoController::class,'index'])->name('index');
//新增
Route::get('/create',[\App\Http\Controllers\TodoController::class,'get_create_page'])->name('get_create_page');
Route::post('/create',[\App\Http\Controllers\TodoController::class,'suisei_create_data'])->name('suisei_create_data');
//刪除
Route::get('/delete/', [\App\Http\Controllers\TodoController::class, 'delete_data'])
    ->name('delete_data');//修改

//上傳
Route::get('/up',[\App\Http\Controllers\TodoController::class,'get_edit_page'])->name('get_edit_page');
Route::post('/up',[\App\Http\Controllers\TodoController::class,'up_edit_data'])->name('up_edit_data');
//修改
Route::get('/oen/change',[\App\Http\Controllers\TodoController::class,'oen_change'])->name('oen_change');


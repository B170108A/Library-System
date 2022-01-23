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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware'=>['auth']],function(){
//Dashbboard
Route::get('/dashboard',[App\Http\Controllers\DashboardController::class,'index'])->name('dashboard');

//MyProfile
Route::get('/myprofile',[App\Http\Controllers\MyProfileController::class, 'index'])->name('myprofile');

//Borrow
Route::get('/borrow',[App\Http\Controllers\BorrowController::class, 'index'])->name('borrow');

//Book
Route::get('books',[App\Http\Controllers\BooksController::class,'index'])->name('books.index');
Route::get('books/create',[App\Http\Controllers\BooksController::class,'create'])->name('books.create');
Route::get('books/store',[App\Http\Controllers\BooksController::class,'store'])->name('books.store');
Route::get('books/{books}',[App\Http\Controllers\BooksController::class,'update'])->name('books.update');
Route::get('books/show',[App\Http\Controllers\BooksController::class,'show'])->name('books.show');
Route::get('books/{books}/edit',[App\Http\Controllers\BooksController::class,'edit'])->name('books.edit');
Route::delete('books/{books}',[App\Http\Controllers\BooksController::class,'destroy'])->name('books.destroy');
});
require __DIR__.'/auth.php';

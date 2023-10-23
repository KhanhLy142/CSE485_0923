<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;


Route::get('/', function () {
    return view('welcome');
});
//Có thể đặt tên tùy ý cho phần name bên dưới của resource
//Nhưng nên tuân thủ qui tắc sử dụng tính tự động của laravel

Route::resource('authors', AuthorController::class);
Route::resource('books', BookController::class);

<?php

use Src\Route;

Route::add('GET', '/', [Controller\Site::class, 'main_page'])
    ->middleware('auth', 'can:admin|librarian');
Route::add(['GET', 'POST'], '/login', [Controller\Site::class, 'login']);
Route::add('GET', '/logout', [Controller\Site::class, 'logout']);
Route::add(["GET", "POST"], '/main_page', [Controller\Site::class, 'main_page']);
Route::add(["GET", "POST"], '/books', [Controller\BookView::class, 'book_list'])
    ->middleware('auth', 'can:users');

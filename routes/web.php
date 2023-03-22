<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', function () {
    return view('admin.layout');
});

Route::get('/admin/category', function () {
    return view('admin.category');
});

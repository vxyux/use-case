<?php

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/hello', function () {
    return "Hello World!";
});

Route::get('/categories', function() {
    $categories = Category::all();
    return response()->json($categories, 200);
});
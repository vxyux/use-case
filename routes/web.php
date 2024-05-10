<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Models\Category;

Route::get('/', function () {
    $categories = Category::all();
    return Inertia::render('Welcome', [
        'categories' => $categories,
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
})->name('index');

Route::get('/about', function () {
    return Inertia::render('About/Index');
})->name('about');

Route::get('/pricing', function () {
    return Inertia::render('Pricing/Index');
})->name('pricing');

Route::get('/products/category/{id}', [ProductController::class, 'filter'])->name('products.filter');
Route::resource('products', ProductController::class);
Route::resource('cart', CartController::class);

// Route::get('/products', function () {
//     return Inertia::render('Products/Index');
// })->name('products');

Route::get('/blog', function () {
    return Inertia::render('Blog/Index');
})->name('blog');

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

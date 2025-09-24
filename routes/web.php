<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('FrontOffice.Accueil');
})->name('acceuil');
Route::get('/livres', function () {
    return view('FrontOffice.Livres.LivrePage');
})->name('livres');

Route::get('/articles', function () {
    return view('FrontOffice.Articles.ArticlePage');
})->name('articles');


Route::get('/admin', function () {
    return view('dashboard');
})->middleware(['auth', 'role:admin']);

Route::get('/dashboard', function () {
    return view('BackOffice.Dashboard.Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/users', function () {
    return view('BackOffice.Users.Users');
})->middleware(['auth', 'verified'])->name('users');

Route::get('/authors', function () {
    return view('BackOffice.Authors.Authors');
})->middleware(['auth', 'verified'])->name('authors');

Route::get('/stores', function () {
    return view('BackOffice.Stores.Stores');
})->middleware(['auth', 'verified'])->name('stores');

Route::get('/books', function () {
    return view('BackOffice.Books.Books');
})->middleware(['auth', 'verified'])->name('books');

Route::get('/categories', function () {
    return view('BackOffice.Categories.Categories');
})->middleware(['auth', 'verified'])->name('categories');

Route::get('/borrows', function () {
    return view('BackOffice.Borrows.Borrows');
})->middleware(['auth', 'verified'])->name('borrows');

Route::get('/blogs', function () {
    return view('BackOffice.Blogs.Blogs');
})->middleware(['auth', 'verified'])->name('blogs');

Route::get('/transactions', function () {
    return view('BackOffice.Transactions.Transactions');
})->middleware(['auth', 'verified'])->name('transactions');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\EditorController;
use Illuminate\Support\Facades\Route;
use App\Models\Post;

Route::get('/', [PostController::class, 'index'])->name('posts.index');

Route::get('/dashboard', function () {
    $posts = Post::orderBy('created_at', 'DESC')->get();
    return view('dashboard', [
        'posts' => $posts
    ]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::get('/test', function () {
        return view('test');
    })->name('test');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
    Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
    Route::put('/posts/{post}', [PostController::class, 'update'])->name('posts.update');
    Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');
});

Route::post('/store', [EditorController::class, 'store']);
Route::post('/editor/image_upload', [EditorController::class, 'upload'])->name('upload');

Route::get('/posts/{slug}', [PostController::class, 'show'])->name('posts.show');

require __DIR__.'/auth.php';
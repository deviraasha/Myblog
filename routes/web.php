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

Route::get('/localization/{language}', [\App\Http\Controllers\LocalizationController::class, 'switch'])->name('localization.switch');

Route::get('/', [\App\Http\Controllers\HomepageController::class, 'home'])->name('homepage.home');
Route::get('/categories', [\App\Http\Controllers\HomepageController::class, 'showCategories'])->name('homepage.categories');
Route::get('/categories/{slug}', [\App\Http\Controllers\HomepageController::class, 'showPostsByCategory'])->name('homepage.post-category');
Route::get('/tags', [\App\Http\Controllers\HomepageController::class, 'showTags'])->name('homepage.tags');
Route::get('/search', [\App\Http\Controllers\HomepageController::class, 'searchPost'])->name('homepage.search-post');



Auth::routes([
    'register' => false
]);

Route::group(['prefix' => 'dashboard', 'middleware' => ['web', 'auth']], function () {
    Route::get('/', [\App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard.index');

    //categories
    Route::get('/categories/select', [\App\Http\Controllers\CategoryController::class, 'select'])->name('categories.select');
    Route::resource('/categories', \App\Http\Controllers\CategoryController::class);
    //tags
    Route::get('/tags/select', [\App\Http\Controllers\TagController::class, 'select'])->name('tags.select');
    Route::resource('/tags', \App\Http\Controllers\TagController::class)->except(['show']);
    //posts
    Route::resource('/posts', \App\Http\Controllers\PostController::class);

    //file manager
    Route::group(['prefix' => 'filemanager'], function () {
        \UniSharp\LaravelFilemanager\Lfm::routes();
    });
});

<?php

use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('login', [LoginController::class, 'login'])->name('login');
Route::post('login', [LoginController::class, 'authenticate'])->name('login.post');

Route::get('logout', [LoginController::class, 'logout'])->name('logout');


Route::middleware(['auth', 'hasRole'])->prefix('admin')->name('admin.')->group(function () {
    Route::prefix('products')->name('product.')->group(function(){
        Route::get('create', [
            'uses' => 'ProductController@create',
            'inRoles' => ['admin', 'editor'],

        ])->name('create');

        Route::post('create', [
            'uses' => 'ProductController@store',
            'inRoles' => ['admin', 'report'],
        ])->name('store');

        Route::get('/', [
            'uses' => 'ProductController@index',
            'inRoles' => ['admin', 'editor', 'report'],
        ])->name('list');

        Route::get('/{id}/edit', [
            'uses' => 'ProductController@edit',
            'inRoles' => ['admin']
        ])->name('edit');

        Route::put('/{id}/edit', [ProductController::class, 'update'])->name('update');

        Route::get('/{id}/show', [ProductController::class, 'show'])->name('show');

        Route::delete('/delete', [
            'uses' => 'ProductController@destroy',
            'inRoles' => 'admin',
        ])->name('delete');
    });

	Route::prefix('categories')->name('category.')->group(function(){
		Route::delete('/delete', [
            'uses' => 'CategoryController@destroy',
		    'inRoles' => ['admin'],
        ])->name('delete');

		Route::get('/', [
		    'uses' => 'CategoryController@index',
		    'inRoles' => ['admin', 'editor', 'report'],
		])->name('index');
	});
});
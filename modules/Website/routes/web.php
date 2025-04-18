<?php

use Illuminate\Support\Facades\Route;
use Modules\Website\App\Http\Controllers\WebsiteController;

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

Route::group([], function () {
    Route::get('pages', 'WebsiteController@index')->name('website');
    Route::get('/page/create', [WebsiteController::class, 'create'])->name('website.create');
    Route::post('/page/store', [WebsiteController::class, 'store'])->name('website.store');
    Route::put('/page/{id}/edit', [WebsiteController::class, 'updateContent'])->name('website.edit');
    Route::put('/page/{id}/update', [WebsiteController::class, 'update'])->name('website.update');
    Route::delete('/page/{id}/delete', [WebsiteController::class, 'destroy'])->name('website.delete');
});

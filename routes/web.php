<?php

use App\Http\Controllers\AddDesignsController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\DesignCategoryController;
use App\Http\Controllers\AlgorithmController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [ClientController::class, 'index'])->name('client.index');
Route::get('/form', [ClientController::class, 'form'])->name('client.form');
Route::get('/about', [ClientController::class, 'about'])->name('client.about');
Route::get('/profile', [ClientController::class, 'profile'])->name('client.profile');
Route::get('/history', [ClientController::class, 'history'])->name('client.history');
Route::get('/contact', [ClientController::class, 'contact'])->name('client.contact');
Route::get('/recommendation', [ClientController::class, 'recommendation'])->name('client.recommendation');
Route::post('/page', [AlgorithmController::class, 'page'])->name('client.page');
Route::get('/categorys/{slug}', [ClientController::class, 'category'])->name('client.category');
Route::get('/detail/{slug}', [ClientController::class, 'detail'])->name('client.detail');
Route::get('/request/{slug}', [ClientController::class, 'request'])->name('client.request');
Route::post('/store-request', [ClientController::class, 'customizationstore'])->name('client.storerequest');


Auth::routes();

Route::prefix('/admin')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('admin.index');
    Route::get('/user-detail', [HomeController::class, 'user'])->name('admin.user');
    Route::get('/designer-detail', [HomeController::class, 'designer'])->name('admin.designer');
    Route::get('/trending', [HomeController::class, 'trending'])->name('admin.trending');
    Route::get('/profile', [HomeController::class, 'profile'])->name('admin.design.profile');
    Route::get('/design-detail/{id}', [HomeController::class, 'design'])->name('admin.design');
    Route::post('/approved-design/{id}', [HomeController::class, 'ApprovedDesign'])->name('admin.designapproved');
    Route::post('/decline-design/{id}', [HomeController::class, 'DeclineDesign'])->name('admin.designdecline');
    Route::group(['prefix' => '/category'], function () {
        Route::get('/', [DesignCategoryController::class, 'index'])->name('design.category');
        Route::get('/addcategory', [DesignCategoryController::class, 'addcategory'])->name('design.category.addcategory');
        Route::post('/store-category', [DesignCategoryController::class, 'store'])->name('design.category.storecategory');
        Route::get('/edit-category/{slug}', [DesignCategoryController::class, 'edit'])->name('design.category.editcategory');
        Route::post('/update-category/{slug}', [DesignCategoryController::class, 'update'])->name('design.category.updatecategory');
    });
    Route::group(['prefix' => '/design'], function () {
        Route::get('/', [AddDesignsController::class, 'index'])->name('design.index');
        Route::get('/profile', [AddDesignsController::class, 'profile'])->name('design.profile');
        Route::get('/add-designs', [AddDesignsController::class, 'adddesign'])->name('design.adddesign');
        Route::post('/store-designs', [AddDesignsController::class, 'store'])->name('design.storedesign');
        Route::get('/edit-designs/{slug}', [AddDesignsController::class, 'edit'])->name('design.editdesign');
        Route::post('/update-designs/{slug}', [AddDesignsController::class, 'update'])->name('design.updatedesign');
        Route::delete('/destroy-designs/{slug}', [AddDesignsController::class, 'destroy'])->name('design.destroydesign');

        // for design uploading
        Route::get('/upload-designs/{slug}', [AddDesignsController::class, 'upload'])->name('design.uploaddesign');
        Route::post('/upload-designs-image/{slug}', [AddDesignsController::class, 'uploadimage'])->name('design.uploadimage');
    });
});

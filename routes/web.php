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

Route::get('/', [App\Http\Controllers\ClientController::class, 'index'])->name('client.index');
Route::get('/form', [App\Http\Controllers\ClientController::class, 'form'])->name('client.form');
Route::get('/about', [App\Http\Controllers\ClientController::class, 'about'])->name('client.about');
Route::get('/contact', [App\Http\Controllers\ClientController::class, 'contact'])->name('client.contact');

Auth::routes();

Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('admin.index');
Route::get('/category', [App\Http\Controllers\DesignCategoryController::class, 'index'])->name('design.category');
Route::get('/addcategory', [App\Http\Controllers\DesignCategoryController::class, 'addcategory'])->name('design.category.addcategory');
Route::post('/store-category', [App\Http\Controllers\DesignCategoryController::class, 'store'])->name('design.category.storecategory');
Route::get('/edit-category/{slug}', [App\Http\Controllers\DesignCategoryController::class, 'edit'])->name('design.category.editcategory');
Route::post('/update-category/{slug}', [App\Http\Controllers\DesignCategoryController::class, 'update'])->name('design.category.updatecategory');
Route::get('/adddesign', [App\Http\Controllers\AddDesignsController::class, 'index'])->name('design.index');
Route::get('/add-designs', [App\Http\Controllers\AddDesignsController::class, 'adddesign'])->name('design.adddesign');
Route::post('/store-designs', [App\Http\Controllers\AddDesignsController::class, 'store'])->name('design.storedesign');
Route::get('/edit-designs/{slug}', [App\Http\Controllers\AddDesignsController::class, 'edit'])->name('design.editdesign');
Route::post('/update-designs/{slug}', [App\Http\Controllers\AddDesignsController::class, 'update'])->name('design.updatedesign');
Route::delete('/destroy-designs/{slug}', [App\Http\Controllers\AddDesignsController::class, 'destroy'])->name('design.destroydesign');

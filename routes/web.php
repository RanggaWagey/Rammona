<?php

use App\Models\Product;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CobaController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DrinkController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\SubCategoryController;

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

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'root'])->name('root');

//Update User Details
Route::post('/update-profile/{id}', [App\Http\Controllers\HomeController::class, 'updateProfile'])->name('updateProfile');
Route::post('/update-password/{id}', [App\Http\Controllers\HomeController::class, 'updatePassword'])->name('updatePassword');


//Language Translation
// Route::get('index/{locale}', [App\Http\Controllers\HomeController::class, 'lang']);

Route::get('/coba', [CobaController::class, 'index'])->name('coba');

// Route::resource('/coba', CobaController::class);

Route::prefix('/categories')->group(function () {
    Route::get('/', [CategoryController::class, 'index'])->name('categories.index');
    Route::get('/create', [CategoryController::class, 'create'])->name('categories.create');
    Route::post('/', [CategoryController::class, 'store'])->name('categories.store');
    Route::delete('/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');
    Route::get('/{category}', [CategoryController::class, 'show'])->name('categories.show');
    Route::get('/{category}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
    Route::put('/{category}', [CategoryController::class, 'update'])->name('categories.update');
});

Route::prefix('/subcategories')->group(function () {
    Route::get('/', [SubCategoryController::class, 'index'])->name('subcategories.index');
    Route::get('/create', [SubCategoryController::class, 'create'])->name('subcategories.create');
    Route::post('/', [SubCategoryController::class, 'store'])->name('subcategories.store');
    Route::delete('/{subcategory}', [SubCategoryController::class, 'destroy'])->name('subcategories.destroy');
    Route::get('/{subcategory}', [SubCategoryController::class, 'show'])->name('subcategories.show');
    Route::get('/{subcategory}/edit', [SubCategoryController::class, 'edit'])->name('subcategories.edit');
    Route::put('/{subcategory}', [SubCategoryController::class, 'update'])->name('subcategories.update');
});

Route::prefix('/products')->group(function () {
    Route::get('/', [ProductController::class, 'index'])->name('products.index');
    Route::get('/create', [ProductController::class, 'create'])->name('products.create');
    Route::post('/', [ProductController::class, 'store'])->name('products.store');
    Route::delete('/{product}', [ProductController::class, 'destroy'])->name('products.destroy');
    Route::get('/{product}', [ProductController::class, 'show'])->name('products.show');
    Route::get('/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
    Route::put('/{product}', [ProductController::class, 'update'])->name('products.update');
});

Route::get('/categories/{subcategory:slug}', function (SubCategory $subcategory) {
    return view('dashboard.products.subcategory', [
        'title' => $subcategory->name,
        'product' => $subcategory->product,
        'subcategory' => $subcategory->name
    ]);
});

Route::get('view-category/{slug}', [ProductController::class, 'viewcategory']);
Route::get('/home', [App\Http\Controllers\HomepageController::class, 'index'])->name('homepage');
Route::get('/food', [App\Http\Controllers\FoodController::class, 'index'])->name('product.food');
Route::get('/drink', [\App\Http\Controllers\DrinkController::class, 'index'])->name('product.drink');
Route::get('/contact', [\App\Http\Controllers\ContactController::class, 'index'])->name('product.contact');

//  Route::get('{any}', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
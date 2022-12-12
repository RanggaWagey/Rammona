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
use App\Http\Controllers\PromoController;

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


Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'root'])->name('root');

//Update User Details
Route::post('/update-profile/{id}', [App\Http\Controllers\HomeController::class, 'updateProfile'])->name('updateProfile');
Route::post('/update-password/{id}', [App\Http\Controllers\HomeController::class, 'updatePassword'])->name('updatePassword');


//Language Translation
// Route::get('index/{locale}', [App\Http\Controllers\HomeController::class, 'lang']);

Route::get('/coba', [CobaController::class, 'index'])->name('coba');

// Route::resource('/coba', CobaController::class);

Route::prefix('/categories')->group(function () {
    Route::get('/', [CategoryController::class, 'index'])->name('categories.index')->middleware('auth');
    Route::get('/create', [CategoryController::class, 'create'])->name('categories.create')->middleware('auth');
    Route::post('/', [CategoryController::class, 'store'])->name('categories.store')->middleware('auth');
    Route::delete('/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy')->middleware('auth');
    Route::get('/{category}', [CategoryController::class, 'show'])->name('categories.show')->middleware('auth');
    Route::get('/{category}/edit', [CategoryController::class, 'edit'])->name('categories.edit')->middleware('auth');
    Route::put('/{category}', [CategoryController::class, 'update'])->name('categories.update')->middleware('auth');
});

Route::prefix('/subcategories')->group(function () {
    Route::get('/', [SubCategoryController::class, 'index'])->name('subcategories.index')->middleware('auth');
    Route::get('/create', [SubCategoryController::class, 'create'])->name('subcategories.create')->middleware('auth');
    Route::post('/', [SubCategoryController::class, 'store'])->name('subcategories.store')->middleware('auth');
    Route::delete('/{subcategory}', [SubCategoryController::class, 'destroy'])->name('subcategories.destroy')->middleware('auth');
    Route::get('/{subcategory}', [SubCategoryController::class, 'show'])->name('subcategories.show')->middleware('auth');
    Route::get('/{subcategory}/edit', [SubCategoryController::class, 'edit'])->name('subcategories.edit')->middleware('auth');
    Route::put('/{subcategory}', [SubCategoryController::class, 'update'])->name('subcategories.update')->middleware('auth');
});

Route::prefix('/products')->group(function () {
    Route::get('/', [ProductController::class, 'index'])->name('products.index')->middleware('auth');
    Route::get('/create', [ProductController::class, 'create'])->name('products.create')->middleware('auth');
    Route::post('/', [ProductController::class, 'store'])->name('products.store')->middleware('auth');
    Route::delete('/{product}', [ProductController::class, 'destroy'])->name('products.destroy')->middleware('auth');
    Route::get('/{product}', [ProductController::class, 'show'])->name('products.show')->middleware('auth');
    Route::get('/{product}/edit', [ProductController::class, 'edit'])->name('products.edit')->middleware('auth');
    Route::put('/{product}', [ProductController::class, 'update'])->name('products.update')->middleware('auth');
});

Route::prefix('/promos')->group(function () {
    Route::get('/', [PromoController::class, 'index'])->name('promos.index')->middleware('auth');
    Route::prefix('/create')->group(function () {
        Route::get('/', [PromoController::class, 'create'])->name('promos.create')->middleware('auth');
        Route::get('/{product}/add', [PromoController::class, 'add'])->name('promos.add')->middleware('auth');
    });

    Route::post('/', [PromoController::class, 'store'])->name('promos.store')->middleware('auth');
    Route::delete('/{promo}', [PromoController::class, 'destroy'])->name('promos.destroy')->middleware('auth');
    Route::get('/{promo}', [PromoController::class, 'show'])->name('promos.show')->middleware('auth');
    Route::get('/{promo}/edit', [PromoController::class, 'edit'])->name('promos.edit')->middleware('auth');
    Route::put('/{promo}', [PromoController::class, 'update'])->name('promos.update')->middleware('auth');
});

Route::get('/categories/{subcategory:slug}', function (SubCategory $subcategory) {
    return view('dashboard.products.subcategory', [
        'title' => $subcategory->name,
        'product' => $subcategory->product,
        'subcategory' => $subcategory->name
    ]);
})->middleware('auth');

Route::get('view-category/{slug}', [ProductController::class, 'viewcategory']);
Route::get('/', [App\Http\Controllers\HomepageController::class, 'index'])->name('homepage');
Route::get('/food', [App\Http\Controllers\FoodController::class, 'index'])->name('product.food');
Route::get('/drink', [\App\Http\Controllers\DrinkController::class, 'index'])->name('product.drink');
Route::get('/contact', [\App\Http\Controllers\ContactController::class, 'index'])->name('product.contact');
Route::get('food-category/{slug}', [FoodController::class, 'viewcategoryfood']);
Route::get('drink-category/{slug}', [DrinkController::class, 'viewcategorydrink']);

//  Route::get('{any}', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
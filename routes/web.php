<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;



use Illuminate\Support\Facades\Route;
use App\Models\Category;
use App\Models\Product;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {

    $categories = Category::all();

    return view('dashboard', ["categories"=>$categories]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/home', [HomeController::class,'getHomePage'])->name("client.get.home");
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/category/{category}', [CategoryController::class, 'show'])->name('category.show');
    Route::get('/product/{product}', [ProductController::class, 'show'])->name('product.show');
    Route::get('/favourite/{id}',[ProductController::class, 'favouriteProduct'])->name("favourite.product");
    Route::get('/cart', [HomeController::class,'getCart'])->name("client.get.cart");
    Route::get('/addToCart/{productid}', [HomeController::class,'addToCart'])->name("client.post.cart");
    Route::get('/wishlist', [HomeController::class, 'wishlist'])->name('client.wishlist');

});

require __DIR__.'/auth.php';

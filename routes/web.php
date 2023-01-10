<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PaymentController;




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
})->name("landing");

Route::get('/dashboard', function () {

    $categories = Category::all();

    return view('dashboard', ["categories" => $categories]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/home', [HomeController::class, 'getHomePage'])->name("client.get.home");
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/category/{category}', [CategoryController::class, 'show'])->name('category.show');
    Route::get('/product/{product}', [ProductController::class, 'show'])->name('product.show');
    Route::get('/favourite/{id}', [ProductController::class, 'favouriteProduct'])->name("favourite.product");
    Route::get('/cart', [HomeController::class, 'getCart'])->name("client.get.cart");
    Route::post('/addToCart', [HomeController::class, 'addToCart'])->name("client.post.cart");
    Route::get('/wishlist', [HomeController::class, 'wishlist'])->name('client.wishlist');

    Route::get('/checkout', [PaymentController::class, 'checkout'])->name('client.checkout');


    // Route::get('/addToCartWL/{productid}', [HomeController::class, 'addToCartWL'])->name("client.WLcart");
    // Route::get('/aboutus', [HomeController::class, 'aboutus'])->name("aboutus.view");
    Route::get('/aboutUs', [HomeController::class, 'aboutUs'])->name("aboutus.view");


    Route::post('/payment', [PaymentController::class, 'payment'])->name("client.payment");

    Route::get('/orders', [PaymentController::class, 'orders'])->name("client.orders");

    Route::post('/review', [ProductController::class, 'review'])->name("client.review");
    Route::get('/removefromcart/{productid}/{quantity}', [HomeController::class, 'removefromcart'])->name("cart.removefromcart");
    Route::get('/removeallcart', [HomeController::class, 'removeallcart'])->name("cart.removeallcart");


});

require __DIR__ . '/auth.php';

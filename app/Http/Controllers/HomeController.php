<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;
// use App\Http\Controllers\Input;
//use App\Http\Controllers\Input;
use Illuminate\Support\Facades\Input;
use Illuminate\Validation\ValidationException;

// use Input;


class HomeController extends Controller
{

    public function aboutus()
    {
        $categories = Category::all();
        return view("categories.aboutus",["categories" => $categories]);
    }
    public function getHomePage()
    {
        $categories = Category::all();
        return view("categories.Home", ["categories" => $categories]);
    }
    public function getCart()
    {
        $categories = Category::all();
        $cart = Auth::user()->cart;

        return view("categories.cart", ["categories" => $categories, "cart" => $cart]);
    }

    public function addToCart(Request $request)
    {
        $request->validate([
            "product_id" => ["required", "exists:products,id"],
            "quantity" => ['required', 'min:1'],

        ]);
        $product = Product::find($request->product_id);

        if ($product) {
            if ($request->quantity > $product->quantity) {
                return throw ValidationException::withMessages(['quantity' => 'This value must not be greater than ' . $product->quantity]);
            }
            $cart = Auth::user()->cart;
            if (!$cart) {
                $cart = Cart::create([
                    "user_id" => Auth::user()->id,
                    'total_price' => $product->price * $request->quantity,
                    'num_of_items' => $request->quantity

                ]);
                $cart->Product()->attach($product->id, ["quantity" => $request->quantity]);
                return redirect()->back();
            } else {

                foreach ($cart->Product as $productCart) {

                    if ($productCart->id == $product->id) {
                        $cart->Product()->updateExistingPivot($product->id, ["quantity" => $productCart->pivot->quantity + $request->quantity]);
                        $cart->total_price = ($cart->total_price) + (($product->price) * $request->quantity);
                        $cart->num_of_items = ($cart->num_of_items) + $request->quantity;
                        $cart->save();
                        return redirect()->back();
                    }
                }

                $cart->Product()->attach($product->id, ["quantity" => $request->quantity]);
                $cart->total_price = ($cart->total_price) + (($product->price) * $request->quantity);
                $cart->num_of_items = ($cart->num_of_items) + $request->quantity;
                $cart->save();
                return redirect()->back();
            }
        }
    }


    public function wishlist()
    {
        $categories = Category::all();
        $user = Auth::user();
        $wlproducts = $user->favorite(Product::class);
        return view("categories.wishlist", ["categories" => $categories, "wlproducts" => $wlproducts]);
    }

}

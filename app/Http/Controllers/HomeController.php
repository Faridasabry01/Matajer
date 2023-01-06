<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;

class HomeController extends Controller
{
    public function getHomePage()
    {
        return view("");

    }
    public function getCart()
    {
        return view("categories.cart");
    }

    public function addToCart($productid)
    {
        $categories = Category::all();
        $product = Product::find($productid);
        $cart = Auth::user()->cart;
        if (!$cart) {
            $cart = Cart::create([
                "user_id"=>Auth::user()->id,
                'total_price'=>0
                ,'num_of_items'=>0

            ]);
            $cart->Product()->attach($productid,["quantity"=>1]);
            return redirect(route("product.show",$productid,["categories"=>$categories]));

        }else{

            $cart->Product()->attach($productid,["quantity"=>1]);
            return redirect(route("product.show",$productid,["categories"=>$categories]));
        }


    }

    // $categories = Category::all();
    // return view("categories.product",["categories"=>$categories,"product"=>$product]);
    public function wishlist()
    {
        $categories = Category::all();
        $user=Auth::user();
        $wlproducts=$user->favorite(Product::class);

        return view("categories.wishlist",["wlproducts"=>$wlproducts]);

    }
    public function addToCartWL($productid)
    {
        $categories = Category::all();
        $user=Auth::user();
        $wlproducts=$user->favorite(Product::class);
        $product = Product::find($productid);
        $cart = Auth::user()->cart;
        if (!$cart) {
            $cart = Cart::create([
                "user_id"=>Auth::user()->id,
                'total_price'=>0
                ,'num_of_items'=>0

            ]);
            $cart->Product()->attach($productid,["quantity"=>1]);
             //return redirect(route("client.wishlist"));
             return view("categories.wishlist",["categories"=>$categories,"wlproducts"=>$wlproducts]);

        }else{

            $cart->Product()->attach($productid,["quantity"=>1]);
            //return redirect(route("client.wishlist"));
            return view("categories.wishlist",["categories"=>$categories,"wlproducts"=>$wlproducts]);

        }


    }
}

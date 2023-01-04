<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;

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

        $product = Product::find($productid);
        $cart = Auth::user()->cart;
        if (!$cart) {
            $cart = Cart::create([
                "user_id"=>Auth::user()->id,
                'total_price'=>0
                ,'num_of_items'=>0

            ]);
            $cart->Product()->attach($productid,["quantity"=>1]);
            return redirect(route("product.show",$productid));

        }else{

            $cart->Product()->attach($productid,["quantity"=>1]);
            return redirect(route("product.show",$productid));
        }


    }
    public function wishlist($userid)
    {
        $user=Auth::user();
        $wlproducts=$user->favorite(Product::class);

        return view("categories.wishlist",["wlproducts"=>$wlproducts]);

    }
}

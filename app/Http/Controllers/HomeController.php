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
    public function getHomePage()
    {
        return view("");
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

        // $categories = Category::all();

        // $cart = Auth::user()->cart;
        // $quantity = Input::get('quantity'); //input not found
        //$quantity=$request->quantity; //null
        //$quantity = $request->get('quantity'); //null
        //$quantity =$request->only('quantity'); //[]
        //$quantity = $request->input('quantity'); //null
        // dd($request->all()); //[]
        //dd($quantity);

        //    ==========================
        //dd($request); //kalam keter  //dd($_REQUEST); //[] // dd($request->files); //??[]
        // $quantity = 1;


        // if (!$cart) {
        //     $cart = Cart::create([
        //         "user_id" => Auth::user()->id,
        //         'total_price' => 0 //($product->price)*$quantity
        //         , 'num_of_items' => 0 //$quantity

        //     ]);
        //     $cart->Product()->attach($productid, ["quantity" => $quantity]);
        //     return redirect(route("product.show", $productid, ["categories" => $categories]));
        // } else {
        //     $cart->total_price = ($cart->total_price) + (($product->price) * $quantity); //msh btsm3 fl database
        //     $cart->num_of_items = ($cart->num_of_items) + $quantity;    //msh btsm3 fl database



        //     $cart->Product()->attach($productid, ["quantity" => $quantity]);
        //     dd($cart->num_of_items);
        //     return redirect(route("product.show", $productid, ["categories" => $categories]));
        // }
    }


    public function wishlist()
    {
        $categories = Category::all();
        $user = Auth::user();
        $wlproducts = $user->favorite(Product::class);
        // dd($wlproducts);



        return view("categories.wishlist", ["categories" => $categories, "wlproducts" => $wlproducts]);
    }
    public function addToCartWL($productid)
    {
        $categories = Category::all();
        $user = Auth::user();
        $wlproducts = $user->favorite(Product::class);
        $product = Product::find($productid);
        $cart = Auth::user()->cart;
        if (!$cart) {
            $cart = Cart::create([
                "user_id" => Auth::user()->id,
                'total_price' => 0, 'num_of_items' => 0

            ]);
            $cart->Product()->attach($productid, ["quantity" => 1]);
            //return redirect(route("client.wishlist"));
            return view("categories.wishlist", ["categories" => $categories, "wlproducts" => $wlproducts]);
        } else {

            $cart->Product()->attach($productid, ["quantity" => 1]);
            //return redirect(route("client.wishlist"));
            return view("categories.wishlist", ["categories" => $categories, "wlproducts" => $wlproducts]);
        }
    }
}

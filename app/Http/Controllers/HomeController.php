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
// use Input;


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

    public function addToCart($productid,Request $request)
    {
        $categories = Category::all();
        $product = Product::find($productid);
        $cart = Auth::user()->cart;
       // $quantity = Input::get('quantity'); //input not found
        //$quantity=$request->quantity; //null
        //$quantity = $request->get('quantity'); //null
        //$quantity =$request->only('quantity'); //[]
       //$quantity = $request->input('quantity'); //null
              // dd($request->all()); //[]
               //dd($quantity);

            //    ==========================
               //dd($request); //kalam keter  //dd($_REQUEST); //[] // dd($request->files); //??[]
               $quantity=1;


        if (!$cart) {
            $cart = Cart::create([
                "user_id"=>Auth::user()->id,
                'total_price'=>0 //($product->price)*$quantity
                ,'num_of_items'=>0 //$quantity

            ]);
            $cart->Product()->attach($productid,["quantity"=>$quantity]);
            return redirect(route("product.show",$productid,["categories"=>$categories]));

        }
        else{
            $cart->total_price=($cart->total_price)+(($product->price)*$quantity); //msh btsm3 fl database
            $cart->num_of_items=($cart->num_of_items)+$quantity;    //msh btsm3 fl database



            $cart->Product()->attach($productid,["quantity"=>$quantity]);
            dd( $cart->num_of_items);
            return redirect(route("product.show",$productid,["categories"=>$categories]));
        }


    }


    public function wishlist()
    {
        $categories = Category::all();
        $user=Auth::user();
        $wlproducts=$user->favorite(Product::class);



        return view("categories.wishlist",["categories"=>$categories,"wlproducts"=>$wlproducts]);

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

<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Http\Requests\StorePaymentRequest;
use App\Http\Requests\UpdatePaymentRequest;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;
use Illuminate\Support\Facades\Hash;





class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function orders()
    {
        $categories = Category::all();
        $orders = Auth::user()->orders;
        //dd($orders);


        return view("categories.order",["orders" => $orders,"categories" => $categories]);
    }

    public function checkout()
    {
        $cart = Auth::user()->cart;
        $total = $cart;
        $payments = Auth::user()->payments;
        return view("categories.payment", ["cart" => $total, "payments" => $payments]);
    }

    public function payment(Request $request)
    {
        $request->validate([
            "payment_method" => ["required", "string", "in:Visa,cash"],
            "address" => ["required"],
            "street" => ["required"],
            "building_no" => ["required"],
        ]);

        if ($request->payment_method == "Visa") {
            $request->validate([
                "card_number" => ["required", "regex:/^[(]{0,1}[0-9]{4}[)]{0,1}[-\s\.]{0,1}[0-9]{4}[-\s\.]{0,1}[0-9]{4}[-\s\.]{0,1}[0-9]{4}$/"],
                "exp" => ["required","regex:/^[0-9]{2}-[0-9]{2}$/"],
                "cvv" => ["required", "regex:/^[0-9]{3}$/"],
                "card_holder_name" => ["required"],
            ]);

            $payment = Payment::create([
                'payment_method' => "Visa",
                'card_number' => Hash::make($request->card_number),
                'expdate' => $request->exp,
                'cvv' => $request->cvv,
                'Cardholdername' => $request->card_holder_name,
                'user_id' => Auth::user()->id
            ]);
            $cart = Auth::user()->cart;

            $order = Order::create([
                'payment_id' => $payment->id,
                'user_id' => Auth::user()->id,
                'total_price' => $cart->total_price,
                'num_of_items' => $cart->num_of_items,
            ]);

            $user=Auth::user();
            $user->address=$request->street;
            $user->city=$request->address;
            $user->buildingNum=$request->building_no;
            $user->save();

             $cart->Product()->detach();
            $cart->total_price = 0;
             $cart->num_of_items =0;
            $cart->save();

            return redirect(route("client.orders"));

        } else if ($request->payment_method == "cash") {
            $cart = Auth::user()->cart;

            $order = Order::create([
                'user_id' => Auth::user()->id,
                'total_price' => $cart->total_price,
                'num_of_items' => $cart->num_of_items,
            ]);

            $user=Auth::user();
            $user->address=$request->street;
            $user->city=$request->address;
            $user->buildingNum=$request->building_no;
            $user->save();
            $cart->Product()->detach();
            $cart->total_price = 0;
             $cart->num_of_items =0;
            $cart->save();

            return redirect(route("client.orders"));

        }
    }



    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePaymentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePaymentRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function show(Payment $payment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function edit(Payment $payment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePaymentRequest  $request
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePaymentRequest $request, Payment $payment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Payment $payment)
    {
        //
    }
}

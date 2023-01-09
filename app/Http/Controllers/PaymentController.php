<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Http\Requests\StorePaymentRequest;
use App\Http\Requests\UpdatePaymentRequest;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function orders()
    {
        $orders = Auth::user()->orders;
        //dd($orders);


        return view("categories.order",["orders" => $orders]);
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
                "card_number" => ["required"],
                "exp" => ["required"],
                "cvv" => ["required"],
                "card_holder_name" => ["required"],
            ]);

            $payment = Payment::create([
                'payment_method' => "Visa",
                'card_number' => $request->card_number,
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
            return redirect(route("client.orders"));

        } else if ($request->payment_method == "cash") {
            $cart = Auth::user()->cart;

            $order = Order::create([
                'user_id' => Auth::user()->id,
                'total_price' => $cart->total_price,
                'num_of_items' => $cart->num_of_items,
            ]);

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

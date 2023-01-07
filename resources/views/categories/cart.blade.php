@extends('layouts.app')


@section('content')

    <div class="bg-transparent shadow" style="height:2.5em">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 text-center"
            style="background-color: rgba(99, 92, 99, 0.411); height:100%;">
            @if (isset($categories))
                @foreach ($categories as $category)
                    <span class="font-semibold text-xl text-gray-800 leading-tight px-2 ">
                        <a style="color:rgba(255, 255, 255, 0.849);font-size:18px"
                            href="{{ route('category.show', $category) }}">{{ $category->name }}</a>
                    </span>
                @endforeach
            @endif
        </div>
    </div>

    <div class="container-fluid  mt-100">
        <div class="row">

            <div class="col-md-12">

                <div class="Cartt">
                    <div class="Head-Cart">
                        <h5 style="font-size: 30px;"> <b> Your Cart</b></h5>

                        @if (isset($cart))
                            <div class="Body-Cart">
                                @if (count($cart->Product) == 0)
                                    <div class="col-sm-12 empty-cart-cls text-center">
                                        <img src="https://i.imgur.com/dCdflKN.png" width="130" height="130"
                                            class="img-fluid mb-4 mr-3">
                                        <h3><strong>Your Cart is Empty</strong></h3>
                                        <h4>Looks like you have not added anything to your cart. Go ahead and explore top
                                            Categories.</h4>
                                        <a href="#" class="btn btn-primary cart-btn-transform m-3"
                                            data-abc="true">continue
                                            shopping</a>

                                    </div>
                                @else
                                    <div class=”Header”>

                                        <h5 class=”Heading”>Shopping Cart </h5>
                                        <p>Total Price: {{ $cart->total_price }} EGP</p>
                                        <p>Quantity: {{ $cart->num_of_items }}</p>

                                        @foreach ($cart->Product as $product)
                                            <div class="d-flex">
                                                <img src="{{ $product->image }}" width="200" height="200"
                                                    alt="">
                                                <div class="">
                                                    <p>Product: {{ $product->name }}</p>
                                                    <p>Price: {{ $product->price }}</p>
                                                    <p>Quantity: {{ $product->pivot->quantity }}</p>
                                                </div>
                                            </div>
                                            <hr>
                                        @endforeach
                                        <h6 class=”Action”>Remove all</h6>
                                    </div>
                                @endif




                            </div>
                        @else
                            <div class="col-sm-12 empty-cart-cls text-center">
                                <img src="https://i.imgur.com/dCdflKN.png" width="130" height="130"
                                    class="img-fluid mb-4 mr-3">
                                <h3><strong>Your Cart is Empty</strong></h3>
                                <h4>Looks like you have not added anything to your cart. Go ahead and explore top
                                    Categories.</h4>
                                <a href="#" class="btn btn-primary cart-btn-transform m-3" data-abc="true">continue
                                    shopping</a>

                            </div>
                        @endif
                    </div>


                </div>

            </div>

        </div>

    @endsection

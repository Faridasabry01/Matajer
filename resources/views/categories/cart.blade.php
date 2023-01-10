@extends('layouts.app')


@section('content')

<div class="bg-transparent shadow" style="height:2.5em">
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 text-center"
        style="background-color: rgba(0, 0, 0, 0.822); height:100%">
        @foreach ($categories as $category)
            <span class="font-semibold text-xl text-gray-800 leading-tight px-2 ">
                <a style="color:rgb(249, 75, 153);font-size:18px"
                    href="{{ route('category.show', $category) }}">{{ $category->name }}</a>
            </span>
        @endforeach

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
                                        <a href="{{route("dashboard")}}" class="btn btn-primary cart-btn-transform m-3"
                                            data-abc="true">continue
                                            shopping</a>

                                    </div>
                                @else
                                    <div class=”Header”>

                                        {{-- <h5 class=”Heading”>Shopping Cart </h5> --}}
                                        <p>Total Price: {{ $cart->total_price }} EGP</p>
                                        <p>Number of items: {{ $cart->num_of_items }}</p>

                                        @foreach ($cart->Product as $product)
                                            <div class="d-flex">
                                                <img src="{{ $product->image }}" width="200" height="200">
                                                <div class="">
                                                    <p>Product name: {{ $product->name }}</p>
                                                    <pre>Price: {{ $product->price }}  Quantity: {{ $product->pivot->quantity }}  <a href="{{route("cart.removefromcart",['productid'=>$product,'quantity'=> $product->pivot->quantity])}}"><button type="button" class="btn btn-dark">Remove</button></a></pre>
                                                </div>
                                            </div>
                                            <hr>
                                        @endforeach
                                        <div>
                                            <a href="{{route("cart.removeallcart")}}"><button type="button" class="btn btn-danger">Remove all</button></a>

                                        <a href="{{route("client.checkout")}}" ><button type="button" class="btn btn-info">Checkout</button></a>
                                        </div>

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
                                <a href="{{route("dashboard")}}" class="btn btn-primary cart-btn-transform m-3" data-abc="true">continue
                                    shopping</a>

                            </div>
                        @endif
                    </div>


                </div>

            </div>

    </div>

    @endsection

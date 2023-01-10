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

                <div class="cardwl">
                    <div class="card-header">
                        <h5 style="font-size: 30px;"> <b>Your Wishlist</b></h5>
                    </div>
                    <div class="card-body cart">
                        @if (count($wlproducts) == 0)
                            <div class="col-sm-12 empty-cart-cls text-center">
                                <img src="{{asset("/storage/imagesWishlist_Aboutus/WL.png")}}" width="130" height="130"
                                    class="img-fluid mb-4 mr-3">
                                <h3><strong>Your Wishlist is Empty</strong></h3>
                                <h4>Looks like you have not added anything to your Wishlist. Go ahead and explore top
                                    Categories.</h4>
                                <a href="{{route("dashboard")}}" class="btn btn-primary cart-btn-transform m-3"
                                    data-abc="true">continue
                                    shopping</a>


                            </div>
                        @else
                            {{-- <div class="flex-1">
                                <table class="w-full text-sm lg:text-base" cellspacing="0">
                                    <thead>
                                        <tr class="h-12 uppercase">
                                            <th class="hidden md:table-cell">Image</th>
                                            <th class="text-left">Name</th>

                                            <th class="hidden text-right md:table-cell"> Add to cart</th>
                                            <th class="hiddenn text-right md:table-cell"> Remove </th>
                                        </tr>
                                    </thead>
                                    <tbody> --}}
                                        <div class=”Header”>

                                            @foreach ($wlproducts as $product)
                                                <div class="d-flex">
                                                    <img src="{{ $product->image }}" width="200" height="200">
                                                    <div>
                                                        <p>Product name: {{ $product->name }}</p>
                                                        <div class="d-flex">
                                                            <div style="display: inline-flexbox; margin-right:2em;">Price: {{ $product->price }}</div>
                                                            <div style="display: inline-flexbox">
                                                            <form action="{{ route('client.post.cart') }}" method="POST">
                                                            @csrf
                                                            <button  type="submit"class="addToCart" style="height:2em; width:6em;">Add to Cart</button>
                                                        </form>
                                                    </div>
                                                        <div style="display: inline-flexbox"s><a href="{{ route('favourite.product', $product->id) }}"class="px-4 py-2  bg-red-600" style="color: black">&#x2718;</a></div>

                                                        </div>

                                                    </div>
                                                </div>
                                                <hr>
                                            @endforeach

                                        </div>
                                        {{-- @foreach ($wlproducts as $product)

                                            <tr>
                                                <td class="hidden pb-4 md:table-cell">
                                                    <a href="#">
                                                        <img src="{{ $product->image }}" width="500" height="500"
                                                            class="w-20 rounded" alt="Thumbnail">
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href="#">
                                                        <p class="mb-2 md:ml-4">{{ $product->name }}</p>


                                                    </a>
                                                    <span> price:{{ $product->price }}</span>
                                                </td>


                                                <td class=" text-right md:table-cell">
                                                    <form action="{{ route('client.get.cart') }}" method="POST">
                                                    @csrf
                                                    <a class="addToCart p-2">Add to Cart </a>
                                                 </form>

                                                </td>
                                                <td class=" text-right md:table-cell">

                                                    <a href="{{ route('favourite.product', $product->id) }}"
                                                        class="px-4 py-2  bg-red-600">x</a>

                                                </td>
                                            </tr>

                                        @endforeach --}}

                                    {{-- </tbody>
                                </table>
                                <div> --}}

                                </div>



                            </div>
                        @endif
                        {{-- <h3 class="text-3xl text-bold">WishList</h3> --}}

                    </div>
                </div>


            </div>

        </div>

    </div>

    {{--
    @foreach ($product as $product)


    @endforeach --}}
@endsection

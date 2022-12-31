@extends("layouts.app")


@section("content")

<div class="bg-white shadow">
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 text-center">
       @foreach ($categories as $category )
       <span class="font-semibold text-xl text-gray-800 leading-tight px-2 ">
        <a href="{{route("category.show",$category)}}"
        class="{{$category->id == $product->category_id ? "btn btn-primary":"" }}"

        >{{ $category->name }}</a>
    </span>
       @endforeach

    </div>

</div>

<div style="display:flex;">
    <div class="productPicDiv">
        <img class="productImg"src="{{$product->image}}" alt="ANASTASIA BEVERLY HILLS Waterproof Creme Liner Jet Black">
    </div>

    <div class="productInfo">
            <pre style="width:fit-content; display: inline-block;">
<h5 style="font-family: Georgia, 'Times New Roman', Times, serif;">{{$product->name}}</h5>
<small>serial number: {{$product->id}} </small>                                                    <div class="wishlistDiv"><i id="wishlist" class="far fa-heart"></i></div>
<h5><strong>price: {{$product->price}} EGP </strong></h5>
quantity: <input type="number" id="quantity" style="width:40px;">

                                                            <button class="addToCart">Add to Cart</button>

description:
{{$product->desc}}
{{-- <ul>
<li>Matches all skin tones</li>
<li>Natural coverage</li>
<li>Made Of High Qaulity Materials</li>
</ul> --}}


            </pre>
    </div>
 </div>

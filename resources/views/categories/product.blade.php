@extends("layouts.app")


@section("content")


<div class="bg-transparent shadow" style="height:2.5em">
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 text-center" style="background-color: rgba(99, 92, 99, 0.411); height:100%">
       @foreach ($categories as $category )
       <span class="font-semibold text-xl text-gray-800 leading-tight px-2 ">
        <a style="color:rgba(255, 255, 255, 0.849);font-size:18px"  href="{{route("category.show",$category)}}"
        class="{{$category->id == $product->category_id ? "btn btn-primary":""}}"

        >{{$category->name}}</a>
    </span>
       @endforeach

</div>

</div>
<div style="display:flex;">
    <div class="productPicDiv">
        <img class="productImg"src="{{$product->image}}" alt="ANASTASIA BEVERLY HILLS Waterproof Creme Liner Jet Black">
    </div>

    <div class="productInfo">
        <pre style="width:fit-content; display: inline-block;"> {{--name-wishlisht--}}
            <div class="d-flex "><div style="display: inline-block;font-family: Georgia, 'Times New Roman', Times, serif; font-size:1.7em">{{$product->name}}  </div><div id="wishlistDIV" class="ml-4"><a href="{{route("favourite.product",$product->id)}}"><i id="{{$product->isFavorited() !== true ? "wishlist":"wishlistFavourite"}}" class="far fa-heart"></i></a></div></div>
serial number: {{$product->id}}
Brand: {{$product->brand}}       Size: {{$product->size}}   Expires at: {{$product->expires_at}}
<h5 style="font-size:24px"><strong>price: {{$product->price}} EGP </strong></h5>
<form action="{{route('client.post.cart',$product->id)}}" method="get">
quantity: <input name="quantity" min="1" type="number" value="1" id="quantity" style="width:3.5em;">

<button  type="submit"name="addtocart"class="addToCart p-2">Add to Cart</button> {{-- href="{{route("client.post.cart",$product->id)}}"--}}
</form>
<div><strong>description:<strong></div>
{{$product->desc}}

        </pre>
    </div>
</div>
{{-- ========================== --}}
 <div id="reviews">
    <div class="heading">
        <h3 class="head">REVIEWS</h3>
    </div>

<div style="display: flex;">
    <div class="reviewsComments">
        <p >There are no reviews yet.</p>
    </div>

    <div>
        <div>
            <h5 >Review this product</h5>
            <form action="" >
            <pre>
<label for="rating"style="color: black">Your Rating</label> <select name="rating" id="rating">
                <option value="">Rate…</option>
                <option value="5">Perfect</option>
                <option value="4">Good</option>
                <option value="3">Average</option>
                <option value="2">Not that bad</option>
                <option value="1">Very Poor</option>
            </select></p>
<textarea id="comment" name="comment" cols="30" rows="5" aria-required="true" placeholder="Your Review"></textarea>

<input name="submit" type="submit" id="submit" class="submit" value="Submit">
            </pre>

            </form>


        </div>
    </div>
</div>
</div>
 @endsection

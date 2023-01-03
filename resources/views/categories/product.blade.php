@extends("layouts.app")


@section("content")


<div class="bg-white shadow">
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 text-center">
       @foreach ($categories as $category )
       <span class="font-semibold text-xl text-gray-800 leading-tight px-2 ">
        <a href="{{route("category.show",$category)}}"
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
            <pre style="width:fit-content; display: inline-block;">
<div class="d-flex ">
    <div style="display: inline-block;font-family: Georgia, 'Times New Roman', Times, serif; font-size:1.7em">{{$product->name}}</div>
<div id="wishlistDIV" class="ml-4"><a href="{{route("favourite.product",$product->id)}}"><i id="{{$product->isFavorited() !== true ? "wishlist":"wishlistFavourite"}}" class="far fa-heart"></i></a></div>
</div>

serial number: {{$product->id}}
Brand: {{$product->brand}}  Size: {{$product->size}}    Expires at: {{$product->expires_at}}
<h5><strong>price: {{$product->price}} EGP </strong></h5>
quantity: <input type="number" id="quantity" style="width:3.5em;">                                         <a class="addToCart p-2" href="{{route("client.post.cart",$product->id)}}">Add to Cart</a>

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

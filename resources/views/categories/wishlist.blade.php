@extends("layouts.app")


@section("content")

<div class="bg-transparent shadow" style="height:2.5em">
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 text-center" style="background-color: rgba(99, 92, 99, 0.411); height:100%">
       @foreach ($categories as $category )
       <span class="font-semibold text-xl text-gray-800 leading-tight px-2 ">
        <a style="color:rgba(255, 255, 255, 0.849);font-size:18px" href="{{route("category.show",$category)}}">{{ $category->name }}</a>
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
           <div class="col-sm-12 empty-cart-cls text-center">
             <img src="imagesWishlist_Aboutus\WL.png" width="130" height="130" class="img-fluid mb-4 mr-3">
             <h3><strong>Your Wishlist is Empty</strong></h3>
             <h4>Looks like you have not added anything to your Wishlist. Go ahead and explore top Categories.</h4>
             <a href="Matajer.html" class="btn btn-primary cart-btn-transform m-3" data-abc="true">continue shopping</a>


           </div>
           <h3 class="text-3xl text-bold">WishList</h3>
                      <div class="flex-1">
                        <table class="w-full text-sm lg:text-base" cellspacing="0">
                          <thead>
                            <tr class="h-12 uppercase">
                              <th class="hidden md:table-cell">Image</th>
                              <th class="text-left">Name</th>

                              <th class="hidden text-right md:table-cell"> Add to cart</th>
                              <th class="hiddenn text-right md:table-cell"> Remove </th>
                            </tr>
                          </thead>
                          <tbody>
                          @foreach ($wlproducts as $product )
                            <tr>
                              <td class="hidden pb-4 md:table-cell">
                                <a href="#">
                                  <img src="{{ $product->image }}" class="w-20 rounded" alt="Thumbnail">
                                </a>
                              </td>
                              <td>
                                <a href="#">
                                  <p class="mb-2 md:ml-4">{{ $product->name }}</p>


                                </a>
                                <span>  price:{{ $product->price }}</span>
                              </td>


                              <td class="hidden text-right md:table-cell">
                                {{-- <form action="{{ route('client.get.cart') }}" method="POST"> --}}
                                  @csrf
                                  <a class="addToCart p-2" href="{{route("client.WLcart", $product->id)}}">Add to Cart </a>

                              {{-- </form> --}}

                              </td>
                              <td class="hiddenn text-right md:table-cell">
                                <form action="{{ $product->removeFavorite(); }}" method="get">
                                  @csrf

                                  <button class="px-4 py-2 text-white bg-red-600">x</button>
                              </form>

                              </td>
                            </tr>
                            @endforeach

                          </tbody>
                        </table>
                        <div>

                        </div>



                      </div>
       </div>
   </div>


     </div>

    </div>

   </div>

   {{--
    @foreach ($product as $product )


    @endforeach --}}

@endsection

@extends("layouts.app")


@section("content")

dd($user->favorite(Product::class););
<div class="container-fluid  mt-100">
    <div class="row">

     <div class="col-md-12">

         <div class="card">
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
                              <th class="hidden md:table-cell"></th>
                              <th class="text-left">Name</th>
                             
                              <th class="hidden text-right md:table-cell"> price</th>
                              <th class="hidden text-right md:table-cell"> Add to cart </th>
                            </tr>
                          </thead>
                          <tbody>
                          @foreach ($wlproducts as $wlproducts )
                            <tr>
                              <td class="hidden pb-4 md:table-cell">
                                <a href="#">
                                  <img src="{{ $item->attributes->image }}" class="w-20 rounded" alt="Thumbnail">
                                </a>
                              </td>
                              <td>
                                <a href="#">
                                  <p class="mb-2 md:ml-4">{{ $wlproducts->name }}</p>
                                  
                                </a>
                              </td>
                              <td class="justify-center mt-6 md:justify-end md:flex">
                                <div class="h-10 w-28">
                                  <div class="relative flex flex-row w-full h-8">
                                    
                                    <form action="{{ route('client.wishlist') }}" method="POST">
                                      @csrf
                                      <input type="hidden" name="id" value="{{ $wlproducts->name}}" >
                                   
                                    class="w-6 text-center bg-gray-300" />
                                    <button type="submit" class="px-2 pb-2 ml-2 text-white bg-blue-500">update</button>
                                    </form>
                                  </div>
                                </div>
                              </td>
                              <td class="hidden text-right md:table-cell">
                                <span class="text-sm font-medium lg:text-base">
                                    ${{ $wlproducts->price }}
                                </span>
                              </td>
                              <td class="hidden text-right md:table-cell">
                                <form action="{{ route('client.get.cart') }}" method="POST">
                                  @csrf
                                  <input type="hidden" value="{{ $wlproducts->id }}" name="id">
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
    @foreach ($wlproducts as $wlproducts )


    @endforeach --}}

@endsection

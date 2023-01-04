@extends("layouts.app")


@section("content")
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
       </div>
   </div>


     </div>

    </div>

   </div>

@endsection

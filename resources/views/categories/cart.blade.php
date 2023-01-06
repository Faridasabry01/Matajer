@extends("layouts.app")


@section("content")

<div class="bg-white shadow" style="background-color: red">
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 text-center">
       @foreach ($categories as $category )
       <span class="font-semibold text-xl text-gray-800 leading-tight px-2 ">
        <a href="{{route("category.show",$category)}}">{{ $category->name }}</a>
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

       <div class="Body-Cart">
           <div class="col-sm-12 empty-cart-cls text-center">
             <img src="https://i.imgur.com/dCdflKN.png" width="130" height="130" class="img-fluid mb-4 mr-3">
             <h3><strong>Your Cart is Empty</strong></h3>
             <h4>Looks like you have not added anything to your cart. Go ahead and explore top Categories.</h4>
             <a href="file:///C:/Users/HP/Downloads/version%20nourr-20221114T232259Z-001/version%20nourr/Matajer.html" class="btn btn-primary cart-btn-transform m-3" data-abc="true">continue shopping</a>

            </div>

            <div class=”Header”>
            <h5 class=”Heading”>Shopping Cart</h5>
            <h6 class=”Action”>Remove all</h6>
            </div>


       </div>
   </div>


     </div>

    </div>

   </div>

@endsection

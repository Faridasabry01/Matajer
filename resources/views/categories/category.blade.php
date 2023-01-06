@extends("layouts.app")


@section("content")


<div class="bg-transparent shadow" style="height:2.5em">
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 text-center" style="background-color: rgba(99, 92, 99, 0.411); height:100%">
       @foreach ($categories as $category )
       <span class="font-semibold text-xl text-gray-800 leading-tight px-2 ">
        <a style="color:rgba(255, 255, 255, 0.849);font-size:18px" href="{{route("category.show",$category)}}"
        class="{{$category->id == $categoryy->id ? "btn btn-primary":"" }}"

        >{{ $category->name }}</a>
    </span>
       @endforeach

    </div>

</div>
<div class="row row-cols-1 row-cols-md-3 g-4" style="align-items:center;margin-top:10px;margin-left: 90px;">
   @foreach ($categoryy->products as  $product)
   <div class="col" style="width: 450px;height: 450;">
    <div class="card h-100" style="width: 350px; height: 200px; ">
      <img src="{{$product->image}}" class="card-img-top" alt="ANASTASIA BEVERLY HILLS Waterproof Creme Liner Jet Black"style="height: 350px;"> <!--edit-->
      <div class="card-body">
          <a href="{{route("product.show",$product->id)}}" style="font-size: 16; color:black">{{$product->name}}</a>
           <p class="card-text">price: {{$product->price}} EGP</p>
      </div>

    </div>
  </div>
   @endforeach

  </div>
  <!-- ------------------------------------- -->
  <!-- row 2 -->



  @endsection

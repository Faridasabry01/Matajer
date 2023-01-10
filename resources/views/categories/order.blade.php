@extends("layouts.app")


@section("content")

{{-- <div class=”Header”>

    <h5 class=”Heading”>My orders </h5>

    @foreach ($orders as $order)
        <div class="d-flex">
            <div class="ordersDivs">
                <b>order number:</b> {{ $order->id }}<br>

                    @if(isset($order->payment_id))
                   <b> Payment method:</b> Cash<br>
                    @else
                  <b>Payment method:</b> Visa<br>
                    @endif
               <b>Total Price:</b> {{ $order->total_price }}<br>
              <b>number of items:</b> {{ $order->num_of_items }}<br>
            </div>
        </div>
        <hr>
    @endforeach

</div> --}}

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
                        <h5 style="font-size: 30px;"> <b> Your Orders</b></h5>

                        @if (isset($orders))
                            <div class="Body-Cart">
                                @if (count($orders) == 0)
                                    <div class="col-sm-12 empty-cart-cls text-center">
                                        <img src="https://i.imgur.com/dCdflKN.png" width="130" height="130"
                                            class="img-fluid mb-4 mr-3">
                                        <h3><strong>Your Have No Orders</strong></h3>
                                        <h4>Looks like you have not haven't ordered anything. Go ahead and explore top
                                            Categories.</h4>
                                        <a href="{{route("dashboard")}}" class="btn btn-primary cart-btn-transform m-3"
                                            data-abc="true">continue
                                            shopping</a>

                                    </div>
                                @else
                                    <div class=”Header”>

                                        {{-- <h5 class=”Heading”>Your Orders </h5> --}}
                                        <div class="row row-cols-1 row-cols-md-3 g-4" style="align-items:center;">
                                            @foreach ($orders as $order)
                                            {{-- <div class="col" style="width:2em;"> --}}
                                                <div class="card h-100" style="width: 20em;">
                                                    <div class="card-body">
                                                <b>order number:</b> {{ $order->id }}<br>

                                                    @if(!isset($order->payment_id))
                                                   <b> Payment method:</b> Cash<br>
                                                    @else
                                                  <b>Payment method:</b> Visa<br>
                                                    @endif
                                               <b>Total Price:</b> {{ $order->total_price }}<br>
                                              <b>number of items:</b> {{ $order->num_of_items }}<br>
                                                    </div>
                                            {{-- </div> --}}

                                            </div>
                                        {{-- <hr> --}}

                                    @endforeach
                                    </div>



                                    </div>
                                @endif




                            </div>
                        @else
                        <div class="col-sm-12 empty-cart-cls text-center">
                            <img src="https://i.imgur.com/dCdflKN.png" width="130" height="130"
                                class="img-fluid mb-4 mr-3">
                            <h3><strong>Your Have No Orders</strong></h3>
                            <h4>Looks like you have not haven't ordered anything. Go ahead and explore top
                                Categories.</h4>
                            <a href="{{route("dashboard")}}" class="btn btn-primary cart-btn-transform m-3"
                                data-abc="true">continue
                                shopping</a>

                        </div>
                        @endif
                    </div>


                </div>

            </div>

    </div>

@endsection


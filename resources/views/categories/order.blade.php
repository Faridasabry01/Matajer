@extends("layouts.app")


@section("content")

<div class=”Header”>

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

</div>

@endsection


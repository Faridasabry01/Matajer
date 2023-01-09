@extends("layouts.app")


@section("content")

<div class=”Header”>

    <h5 class=”Heading”>My orders </h5>

    @foreach ($orders as $order)
        <div class="d-flex">
            <div class="">
                <p>order number: {{ $order->id }}</p>

                    @if(isset($order->payment_id))
                    <p>Payment method: Cash</p>
                    @else
                    <p>Payment method: Visa</p>
                    @endif
                <p>Total Price: {{ $order->total_price }}</p>
                <p>number of items: {{ $order->num_of_items }}</p>
            </div>
        </div>
        <hr>
    @endforeach

</div>

@endsection


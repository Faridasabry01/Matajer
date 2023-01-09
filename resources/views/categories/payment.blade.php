@extends('layouts.app')


@section('content')
    <div class="containerrr d-lg-flex">


        <div class="box-2">
            <div class="box-inner-2">
                <div>
                    <p class="paymentdetails"> <b>Payment Details</b></p>
                    <p class="paymentpara">Complete your purchase by providing your payment details.</p><br>
                </div>

                <form action="{{ route('client.payment') }}" method="POST">
                    @csrf
                    <div>
                        <p class="paymentlabel">Please select your payment method</p>
                        <input type="radio" id="v1" name="payment_method" value="Visa">
                        <label class="thepaymentmethod" for="v1">Visa payment</label><br>
                        <input type="radio" id="c1" name="payment_method" value="cash">
                        <label class="thepaymentmethod" for="c1">Cash</label><br>
                        <x-input-error :messages="$errors->get('payment_method')" class="mt-2" />
                    </div>


                    <div id="cardDetails">
                        <p class="carddetails">Card details</p>

                        <div class="thecarddetails">
                            {{-- <form action="" onsubmit="check()"> --}}
                            Card Number <input type="text" id="cardnum" name="card_number" class="form-control"
                                placeholder="0000-0000-0000-0000"> <br>
                            <x-input-error :messages="$errors->get('card_number')" class="mt-2" />

                            EXP <input type="text" maxlength=5 name="exp" class="form-control" id="exp"
                                placeholder="07-09"><br>
                            <x-input-error :messages="$errors->get('exp')" class="mt-2" />

                            CVV <input type="text" maxlength=3 name="cvv" class="form-control" id="cvv"
                                placeholder="523"><br>
                            <x-input-error :messages="$errors->get('cvv')" class="mt-2" />

                            Cardholder Name <input name="card_holder_name" class="form-control" type="text"
                                id="name" placeholder="John Adams">
                            <x-input-error :messages="$errors->get('card_holder_name')" class="mt-2" />

                            {{-- <input type="submit" class="paybutton" value="Save"> --}}



                        </div>
                    </div>


                    <div class="address">
                        <p class="billingadress">Billing address</p>
                        <select class="form-control-select" name="address" aria-label="Default select example">
                            <option value="Alexandria">Alexandria</option>
                            <option value="Cairo">Cairo</option>
                            <option value="Giza">Giza</option>
                            <option value="Port-said">Port said</option>
                            <option value="Mansoura">Mansoura</option>
                            <option value="Ismaleila">Ismaleila</option>
                            <x-input-error :messages="$errors->get('address')" class="mt-2" />

                        </select>
                        <div class="d-flex">

                            <input class="form-control zip" name="street" type="text" placeholder="street">
                            <x-input-error :messages="$errors->get('street')" class="mt-2" />

                            <input class="form-control state" name="building_no" id="bnum" type="text" maxlength=3
                                placeholder="buildingNo">
                            <x-input-error :messages="$errors->get('building_no')" class="mt-2" />

                        </div>
                    </div>
                    <div>
                        <div>
                            <h6 class="order"><b>Order recap</b></h6>
                            <table>
                                <tr>
                                    <td>Subtotal</td>
                                    <input type="text" value="{{ $cart->total_price }}" name="" id="">
                                    <td align="right"> {{ $cart->total_price }} EGP</td>
                                </tr>
                                <tr>
                                    <td>Vat(20%)</td>
                                    <td align="right"> {{ $cart->total_price * 0.2 }} EGP</td>
                                </tr>
                                <tr>
                                    <td>Shippingfee</td>
                                    <td align="right"> 15 EGP</td>
                                </tr>
                                <tr>
                                    <td>#Items</td>
                                    <td align="right"> {{ $cart->num_of_items }}</td>
                                </tr>
                                <tfoot>
                                    <tr>
                                        <td width="25%">Total</td>
                                        <td align="right">{{ $cart->total_price * 1.2 + 15 }} EGP</td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <input type="submit" class="paybutton" value="Place your order">
                </form>
            </div>


        </div>

        {{-- </div> --}}
    </div>
    </div>

    <script>
        $(document).ready(function() {
            $("#cardDetails").hide();
            $("input[name$='payment_method']").click(function() {
                var test = $(this).val();
                console.log(test);
                if (test == "Visa") {
                    $("#cardDetails").show();

                } else if (test == "cash") {
                    $("#cardDetails").hide();

                }
                // $("div.desc").hide();
                // $("#cardDetails").show();
            });
        });
    </script>
@endsection

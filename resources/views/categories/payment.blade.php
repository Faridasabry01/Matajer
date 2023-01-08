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

                    </div>


                    <div id="cardDetails">
                        <p class="carddetails">Card details</p>

                        <div class="thecarddetails">
                            {{-- <form action="" onsubmit="check()"> --}}
                            Card Number <input type="text" id="cardnum" name="card_number" class="form-control"
                                placeholder="0000-0000-0000-0000"> <br>
                            EXP <input type="text" maxlength=5 name="exp" class="form-control" id="exp"
                                placeholder="07-09"><br>
                            CVV <input type="text" maxlength=3 name="cvv" class="form-control" id="cvv"
                                placeholder="523"><br>
                            Cardholder Name <input name="card_holder_name" class="form-control" type="text"
                                id="name" placeholder="John Adams">
                            {{-- <input type="submit" class="paybutton" value="Save"> --}}



                        </div>
                    </div>


                    <div class="address">
                        <p class="billingadress">Billing address</p>
                        <select class="form-control-select" name="address" aria-label="Default select example">
                            <option selected hidden>Alexandria</option>
                            <option value="1">Cairo</option>
                            <option value="2">Giza</option>
                            <option value="3">Port said</option>
                            <option value="3">Mansoura</option>
                            <option value="3">Ismaleila</option>
                        </select>
                        <div class="d-flex">

                            <input class="form-control zip" name="street" type="text" placeholder="street">
                            <input class="form-control state" name="building_no" id="bnum" type="text" maxlength=3
                                placeholder="buildingNo" required>
                        </div>
                    </div>
                    <div>
                        <div>
                            <h6 class="order"><b>Order recap</b></h6>
                            <table>
                                <tr>
                                    <td>Subtotal</td>
                                    <td align="right"> $225</td>
                                </tr>
                                <tr>
                                    <td>Vat(20%)</td>
                                    <td align="right"> $25</td>
                                </tr>
                                <tr>
                                    <td>Shippingfee</td>
                                    <td align="right"> $5</td>
                                </tr>
                                <tfoot>
                                    <tr>
                                        <td width="25%">Total</td>
                                        <td align="right">$205</td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <button type="submit" class="paybutton" value="Place your order"></button>
                </form>
            </div>


        </div>

        {{-- </div> --}}
    </div>
    </div>

    <script>
        // function display() {
        //     var checkRadio = document.querySelector('input[name="payment_method"]:checked');
        //     if (checkRadio != null) {
        //         document.getElementby
        //     }
        // }
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

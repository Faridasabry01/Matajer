@extends("layouts.app")


@section("content")
<div class="containerrr d-lg-flex">

    <div class="box-2">
        <div class="box-inner-2">
            <div>
                <p class="paymentdetails"> <b>Payment Details</b></p>
                <p class="paymentpara">Complete your purchase by providing your payment details.</p><br>
            </div>

         <form action="{{route("client.payment")}}" method="POST">
            @csrf
            <div>
                    <p class="paymentlabel">Please select your payment method</p>
                    <input type="radio" id="v1"  name="payment_method" value="Visa">
                    <label class="thepaymentmethod" for="v1">Visa payment</label><br>
                    <input type="radio" id="c1"  name="payment_method" value="cash">
                    <label class="thepaymentmethod" for="c1">Cash</label><br>

            </div>


            <div id="cardDetails">
                    <p class="carddetails">Card details</p>

                    <div class="thecarddetails">
                            {{-- <form action="" onsubmit="check()"> --}}
                        Card Number <input type="text" id="cardnum"  class="form-control"  placeholder="0000-0000-0000-0000" required> <br>
                        EXP    <input type="text" maxlength=5 class="form-control"  id="exp" placeholder="07-09" required><br>
                        CVV   <input type="text" maxlength=3 class="form-control" id="cvv"  placeholder="523" required><br>
                        Cardholder Name <input class="form-control" onclick="checkname()"  type="text" id="name" placeholder="John Adams" required>
                        <input type="submit" class="paybutton" value="Save">



                    </div>
            </div>
        </form>
        <form action="">
            @csrf

                    <div class="address">
                        <p class="billingadress">Billing address</p>
                        <select class="form-control-select" aria-label="Default select example">
                            <option selected hidden>Alexandria</option>
                            <option value="1">Cairo</option>
                            <option value="2">Giza</option>
                            <option value="3">Port said</option>
                            <option value="3">Mansoura</option>
                            <option value="3">Ismaleila</option>
                        </select>
                        <div class="d-flex">

                            <input class="form-control zip" type="text" placeholder="street">
                            <input class="form-control state" id="bnum" type="text" maxlength=3 placeholder="buildingNo" onclick="checkaddr()" required>
                            <input type="submit" class="paybutton" value="Save Adress">
                        </div>
                    </div>
        </form>
        <div>
            <form action="">
                @csrf

                <div>
                    <h6 class="order"><b>Order recap</b></h6>
                    <table>
                        <tr>
                            <td >Subtotal</td>
                            <td align="right"> $225</td>
                        </tr>
                        <tr>
                            <td >Vat(20%)</td>
                            <td align="right"> $25</td>
                        </tr>
                        <tr>
                            <td >Shippingfee</td>
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
                <input type="submit" class="paybutton" value="Place your order">
            </form>
        </div>






        </div>

        {{-- </div> --}}
    </div>
</div>

<script>
    function display()
    {
      var checkRadio=document.querySelector('input[name="payment_method"]:checked') ;
      if(checkRadio!=null)
      {
        document.getElementby
      }
    }


</script>



@endsection

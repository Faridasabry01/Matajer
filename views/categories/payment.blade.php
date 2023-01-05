@extends("layouts.app")


@section("content")


<div class="box-2"> 
 <div class="box-inner-2"> 
     <div>
       <p class="fw-bold">Payment Details</p> 
        <p class="dis mb-3">Complete your purchase by providing your payment details</p>
    </div> 
    <form action=""> 
      <div class="mb-3">
        <p class="dis fw-bold mb-2">Email address</p>
          <input class="form-control" type="email" value="luke@skywalker.com">
      </div> 
       <div> 
        <p class="dis fw-bold mb-2">Card details</p>
     <div class="d-flex align-items-center justify-content-between card-atm border rounded"> 
     <div class="fab fa-cc-visa ps-3">
</div>
     <input type="text" class="form-control" placeholder="Card Details">
     <div class="d-flex w-50">
         <input type="text" class="form-control px-0" placeholder="MM/YY"> 
         <input type="password" maxlength=3 class="form-control px-0" placeholder="CVV"> 
    </div> 
    </div> 
   <div class="my-3 cardname"> 
   <p class="dis fw-bold mb-2">Cardholder name</p>
   <input class="form-control" type="text">
  </div> 
  <div class="address">
   <p class="dis fw-bold mb-3">Billing address</p> 
     <select class="form-select" aria-label="Default select example">
     <option selected hidden>United States</option>
     <option value="1">India</option>
     <option value="2">Australia</option>
     <option value="3">Canada</option>
     </select>
     <div class="d-flex"> 
     <input class="form-control zip" type="text" placeholder="ZIP">
     <input class="form-control state" type="text" placeholder="State">
     </div> 
     <div class=" my-3">
      <p class="dis fw-bold mb-2">VAT Number</p> 
      <div class="inputWithcheck"> 
      <input class="form-control" type="text" value="GB012345B9">
      <span class="fas fa-check"></span>
     </div>
    </div>
      <div class="my-3"> 
       <p class="dis fw-bold mb-2">Discount Code</p>
         <input class="form-control text-uppercase" type="text" value="BLACKFRIDAY" id="discount">
     </div> 
     <div class="d-flex flex-column dis"> 
     <div class="d-flex align-items-center justify-content-between mb-2">
        <p>Subtotal</p> 
        <p><span class="fas fa-dollar-sign"></span>19.00</p> 
    </div> 
    <div class="d-flex align-items-center justify-content-between mb-2">
    <div class="d-flex align-items-center"> 
     <p class="pe-2">Discount <span class="d-inline-flex align-items-center justify-content-between bg-light px-2 couponCode">
         <span id="code" class="pe-2"></span>
          <span class="fas fa-times close">
         </span>
         </span>
         </p> 
        </div> 
    <p><span class="fas fa-dollar-sign"></span>5.00</p>
    </div>
 <div class="d-flex align-items-center justify-content-between mb-2"> 
    <p>VAT<span>(20%)</span></p> <p><span class="fas fa-dollar-sign">
     </span>2.80</p> 
    </div>
     <div class="d-flex align-items-center justify-content-between mb-2">
      <p class="fw-bold">Total</p> 
      <p class="fw-bold"><span class="fas fa-dollar-sign"></span>16.80</p>
    </div> 
    <div class="btn btn-primary mt-2">Pay<span class="fas fa-dollar-sign px-1"></span>16.80 
   </div> 
   </div> 
   </div>
   </div> 
 </form> 
</div>
 </div>

@endsection
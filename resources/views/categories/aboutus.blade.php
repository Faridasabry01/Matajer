@extends("layouts.app")


@section("content")
 <!---------about us------------------------------------------------------------------->
 <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>

    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img  style="height: 500px;"src="{{asset('/storage/hpimages/cosm.jpg')}}" class="d-block w-100" alt="...">
        <div class="pos-aboutus">
          <h1 style="font-size: 40px;  color: rgb(59, 56, 56);  " >About us</h1>
          <p></p>
        </div>
      </div>
      <div class="carousel-item">
        <img  style="height: 500px;"src="{{asset('/storage/hpimages/t3.jpg')}}" class="d-block w-100" alt="...">
        <div class="pos-ourteam">
          <h1 style="font-size: 40px;  color: black;">Our Team</h1>
          <p></p>
        </div>
      </div>

    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

<div class="divabout" >
    <div class="card-body">
      <p class="card-text"><pre>     <b>     Dear,Customer...
        Matajer is an online store for selling many products such
       as cosmetics, skincare products, haircare products and medicine.
       create an account to be able to
       navigate through the website and choose whatever products you want
       to purchase and add them to your cart! Then products are added.
       .Skincare is classified to 3 skin types(dry,oily,combined) to make it easier
       for the user to choose the product that would suit their skins best.
       And to make the experience more convenient for you, you can use the
       serial number to search for the details of the product and know
       the expiry date. Moreover,you can save products to the Wishlist
       so you can go back and add your favorites to the cart and order it anytime.
       feel free to rate the products and write an honest review about it
       so that other users can read them when they want to buy a product
       </b>
       </pre></p>
    </div>
  </div>

@endsection

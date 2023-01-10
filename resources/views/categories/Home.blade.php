@extends('layouts.app')


@section('content')

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
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
    </div>
    <div class="carousel-inner" >
      <div class="carousel-item active">
        <img style="height: 700px;"src="{{URL::asset("/storage/hpimages/skncr.jpg")}}" class="d-block w-100" alt="...">
        <div class="pos_skincare">
          <h5  style="font-size: 40px;  color: rgba(0, 0, 0, 0.679);  " ><b> skin Care </b></h5>
          <p style="text-align: left;"> Skin care is a range of practices that support skin integrity,<br>
             enhance its appearance,and relieve skin conditions. <br>
             They can include nutrition, avoidance of excessive sun exposure,<br>
             and appropriate use of emollients</p>
        </div>
      </div>
      <div class="carousel-item">
        <img style="height: 700px;"src="{{URL::asset("/storage/hpimages/cosm2.jpg")}}" class="d-block w-100" alt="...">
        <div class="pos_cosmetics" style="text-align: left;">
          <h5 style="font-size: 40px;  color: rgba(0, 0, 0, 0.679); " ><b>  Cosmetics </b></h5>
          <p >Cosmetics are products designed to cleanse, protect and change <br>
            the appearance of external parts of our bodies. <br>
            The key ingredients present in most cosmetics include water, <br>
            emulsifiers, preservatives, thickeners, moisturisers, <br>
            colours and fragrances<br>
           </p>
        </div>
      </div>
      <div class="carousel-item">
        <img style="height: 700px;"src="{{asset('/storage/hpimages/hairc.jpg.jpg')}}" class="d-block w-100" alt="...">
        <div class="pos_haircare">
          <h5 style="  font-size: 40px; color: rgb(112, 67, 67);   "><b> Hair Care</b></h5>
          <p style="text-align:left;">Hair care is important for not only our appearance, but also for our overall hygiene.<br>
            Having healthy hair allows us to look our best and ensure our hair and scalp is healthy.<br>
             It is important to visit a reputable salon and utilize quality hair care products to ensure<br>
              your hair is as healthy as possible.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img style="height: 700px;"src="{{asset('/storage/hpimages/med4.jpg')}}" class="d-block w-100" alt="...">
        <div class="pos_medicine">
          <h5 style="font-size: 40px; color: rgba(0, 0, 0, 0.679);  "><b> Medicine</b></h5>
          <p style="text-align: left;">A dosage form that contains one or more active and/or inactive ingredients.<br>
            Medications come in many dosage forms, including tablets, capsules, liquids, creams, and patches.</p>
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
  {{-- =========================== --}}

  <div style="width:42em">
    <h2 class="posAboveCards" style="font-family: times new roman;">GET A GLIMPSE OF WHAT WE GOT IN STOCK</h2>

  </div>    <!-- cards -->
      <div class="row row-cols-1 row-cols-md-4 g-1">
        <div class="col">
          <div  style="border: none;" class=" card h-70">
            <img  class="cardPictureResize"src="{{asset('/storage/cardsimages/R.jpg')}}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">  </h5>
              <p class="card-text"> </p>
            </div>

          </div>
        </div>
        <div class="col">
          <div style="border: none;"class="card h-80">
            <img class="cardPictureResize" src="{{asset('/storage/cardsimages/akincare.jpg')}}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"> </h5>
              <p class="card-text"> </p>
            </div>

          </div>
        </div>

        <div class="col">
          <div  style="border: none;" class="card h-100">
            <img class="cardPictureResize" src="{{asset('/storage/cardsimages/skincare.jpg')}}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"> </h5>
              <p class="card-text"> </p>
            </div>

          </div>
        </div>

        <div class="col">
          <div  style="border: none;" class="card h-100">
            <img class="cardPictureResize" src="{{asset('/storage/cardsimages/4854738b3c74ef8cb92b2ef485ebd705.jpg')}}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"> </h5>
              <p class="card-text"> </p>
            </div>

          </div>
        </div>
      </div>



@endsection

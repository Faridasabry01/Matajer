@extends("layouts.guest")


@section("content")
<div style="margin: 30em;">
<div class="signup__container">
    <div class="container__child signup__thumbnail">

      <div class="thumbnail__content text-center">
        <h2 class="heading--primary">Welcome to MATAJER online store</h2>
        <h3 class="heading--secondary">Are you ready to join the elite?</h3>
      </div>

      <div class="signup__overlay"></div>
    </div>
    <div class="container__child signup__form">
        <form method="POST" action="{{ route('register') }}">
            @csrf
        <div class="form-group">
          <label for="username">Name</label>
          <input class="form-control" type="text" value="{{old('name')}}" name="name" id="username" placeholder="choose a Username"  />
        </div>
        <x-input-error :messages="$errors->get('name')" class="mt-2" />

        <div class="form-group">
          <label for="email">Email</label>
          <input class="form-control" type="text" value="{{old('email')}}" name="email" id="email" placeholder="enter email"  />
        </div>
        <x-input-error :messages="$errors->get('email')" class="mt-2" />

        <div class="form-group">
          <label for="phoneNumber">Phone Number</label>
          <input class="form-control" type="text" value="{{old('phone_number')}}" name="phone_number" id="phoneNumber" placeholder="enter Phone Number"  />
        </div>
        <x-input-error :messages="$errors->get('phone_number')" class="mt-2" />

        <div class="form-group">
          <label for="password">Password</label>
          <input class="form-control" type="password" value="{{old('password')}}" name="password" id="password" placeholder="********"  />
        </div>
        <x-input-error :messages="$errors->get('password')" class="mt-2" />

        <div class="form-group">
          <label for="passwordRepeat">Repeat Password</label>
          <input class="form-control" type="password" value="{{old('password_confirmation')}}" name="password_confirmation" id="passwordRepeat" placeholder="********"  />
        </div>
        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />

        <div class="m-t-lg"style="margin-bottom: 1em;">
          <ul class="list-inline">
            <li>
              <input class="btn btn--form" onclick="validate()" type="submit" value="Register" />
            </li>
            <li>
              <a class="signup__link" href="signIn.html">I am already a member</a>
            </li>
          </ul>
        </div>
      </form>
    </div>
  </div>
</div>

@endsection
{{-- @push('styles')
    <link rel="stylesheet" href={{ asset('css/signup.css')}}>
@endpush --}}

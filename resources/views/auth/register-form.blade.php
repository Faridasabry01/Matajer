@extends("layouts.guest")


@section("content")

<div class="signup__container">
    <div class="container__child signup__thumbnail">

      <div class="thumbnail__content text-center">
        <h2 class="heading--primary">Welcome to MATAJER online store</h2>
        <h3 class="heading--secondary">Are you ready to join the elite?</h3>
      </div>

      <div class="signup__overlay"></div>
    </div>
    <div class="container__child signup__form">
      <form action="#">
        <div class="form-group">
          <label for="username">Username</label>
          <input class="form-control" type="text" name="username" id="username" placeholder="choose a Username" required />
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input class="form-control" type="text" name="email" id="email" placeholder="enter email" required />
        </div>
        <div class="form-group">
          <label for="phoneNumber">Phone Number</label>
          <input class="form-control" type="text" name="phoneNumber" id="phoneNumber" placeholder="enter Phone Number" required />
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input class="form-control" type="password" name="password" id="password" placeholder="********" required />
        </div>
        <div class="form-group">
          <label for="passwordRepeat">Repeat Password</label>
          <input class="form-control" type="password" name="passwordRepeat" id="passwordRepeat" placeholder="********" required />
        </div>
        <div class="m-t-lg">
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

@endsection

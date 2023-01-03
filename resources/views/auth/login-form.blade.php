@extends("layouts.guest")


@section("content")

{{-- <div class="container mt-5">
    <div class="row d-flex justify-content-center">
        <div class="col-md-6">
            <form method="POST" action="{{ route('login') }}">
                @csrf
            <div class="card px-5 py-5" id="form1">
                <div class="form-data">
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />

                    <div class="forms-inputs mb-4"> <span>Email</span> <input name="email" class="inputTxt" id="mail" autocomplete="off" type="text" v-model="email"  v-on:blur="emailBlured = true">
                        <div class="invalid-feedback">A valid email is required!</div>
                    </div>

                    <div class="forms-inputs mb-4"> <span>Password</span> <input name="password" class="inputTxt" id="passw" autocomplete="off" type="password" v-model="password"  v-on:blur="passwordBlured = true">

                    </div>
                    <div class="mb-3"> <input class="btn btn-dark w-100" onclick="validate()" value="Sign-In" type="submit"></div>
                </div>

            </div>
        </form>
        </div>
    </div>
</div> --}}

<div class="container mt-5">
    <div class="row d-flex justify-content-center">
        <div class="col-md-6">
            <form method="POST" action="{{ route('login') }}">
                @csrf
            <div class="card_sign_in px-5 py-5" id="form1">
                <div class="form-data">
                    <div class="forms-inputs mb-4"> <span>Email</span> <input name="email" class="inputTxt" id="mail" autocomplete="off" type="text" v-model="email"  v-on:blur="emailBlured = true">
                        <div class="invalid-feedback">A valid email is required!</div>
                    </div>
                    <div class="forms-inputs mb-4"> <span>Password</span> <input name="password" class="inputTxt" id="passw" autocomplete="off" type="password" v-model="password"  v-on:blur="passwordBlured = true">

                    </div>
                    <div class="mb-3"> <input class="btn  btn-dark w-100" onclick="validate()" value="Sign-In" type="submit"></div>
                </div>

            </div>
        </form>
        </div>
    </div>
</div>



@endsection

{{-- @push('styles')
    <link rel="stylesheet" href={{ asset('css/signIn.css')}}>
@endpush --}}

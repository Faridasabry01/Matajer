@extends('layouts.guest')



@section('content')
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

    {{-- <div class="container mt-5">
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
</div> --}}

    <div class="row d-flex justify-content-center"style="margin-bottom:30em">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="body_signin">
                <div style="padding:0em; max-width:100%; width:100%" class="container" onclick="onclick">
                    <div class="top"></div>
                    <div class="bottom"></div>
                    <div class="center">
                        <h2>Please Sign In</h2>
                        <input name="email" type="email" placeholder="email" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        <input name="password" type="password" placeholder="password" />
                        <input style="border-radius: 10px;" class="button_input"type="submit" />
                        <h2>&nbsp;</h2>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection

@push('styles')
    <link rel="stylesheet" href={{ asset('css/login.css') }}>
@endpush

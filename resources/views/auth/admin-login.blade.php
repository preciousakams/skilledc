
@extends('layouts.app')

@section('content')
<style>
    .head {
        text-align: center;
    }

    .main {
        max-width: 100%;
        width: 70%;
        margin: 0 auto;
        position: relative;
        border: 5px solid #05132d;
        border-top-left-radius: 4.25rem;
        border-bottom-right-radius: 4.25rem;
        padding: 32px 32px 40px;
    }

    .main1 {
        max-width: 100%;
        width: 90%;
        margin: 0 auto;
        position: relative;
        border: 20px solid #92802E;
        border-top-left-radius: 4.25rem;
        border-bottom-right-radius: 4.25rem;
        padding: 32px 32px 40px;
    }

    .form-group {
        margin-bottom: 1px;
        margin-top: 1px;
    }

    button {
        background-color: #05132d;
        color: #92802E;
        border-top-left-radius: 1.3rem;
        border-bottom-right-radius: 1.3rem;
        margin-left: 20%;
        margin-top: 10%;
        text-transform: uppercase;
        font-size: 1rem;
        text-align: center;
        padding: 10px 30px;
        /* box-sizing:; */


    }

    .form-control {
        background-color: #f7f7f7;
        width: 98%;
        /* margin: 2px; */
        border: solid transparent;
        border-top-left-radius: 1.3rem;
        border-bottom-right-radius: 1.3rem;

    }

    /* #dropdown {
            background-color: #05132d;
            width: 98%;
            margin-top: 25px;
            border: solid transparent;
            border-top-left-radius: 1.3rem;
            border-bottom-right-radius: 1.3rem;
            color: #f7f7f7;
            font-size: 1.2rem;
            padding: 20px;

        } */

    h4 {
        text-align: center;
        color: #92802E;
    }

    h1 {
        color: #05132d;
        font-weight: 700;
        font-family: sans-serif;
        text-align: center;
    }

    label {
        font-size: 1rem;
        font-weight: 700;
        color: #05132d;
        /* padding-top: 1rem; */
    }
#regbtn{
    color: #05132d;

}
#abtn{
    margin-top: 5%;
    font-weight: bolder;
}

</style>
<div class="container">
    <div class="main1">
        <div class="head">
            <header>
                <h1>Administrator Login</h1>
            </header>
        </div>
        <div class="main">
            <form method="POST" action="{{ route('admin.login.submit') }}">
                @csrf

                <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Your Registered Email">

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Your Registered Password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-6 offset-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-8 offset-md-4">
                        <button type="submit">
                            {{ __('Login') }}
                        </button>  <br>
                        <h6 id="abtn">
                        <a href="{{route ('admin.register' )}} " id="regbtn"> Click Here To Register</a>

                        @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}" style="color:#92802E">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    </h6>
                        @endif
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection

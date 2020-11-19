@extends('layouts.app')

@section('content')

<style>
    .head {
        text-align: center;
    }

    .last {
        margin: 100px;
    }

    .main {
        max-width: 100%;
        width: 70%;
        margin: 0 auto;
        position: relative;
        border: 5px solid #05132d;
        /* background-color: white; */
        border-top-left-radius: 4.25rem;
        border-bottom-right-radius: 4.25rem;
        /* border-radius: 4.25rem; */
        padding: 32px 32px 40px;
    }

    .main1 {
        max-width: 100%;
        width: 90%;
        margin: 0 auto;
        position: relative;
        border: 20px solid #92802E;
        /* background-color: white; */
        border-top-left-radius: 4.25rem;
        border-bottom-right-radius: 4.25rem;
        /* border-radius: 4.25rem; */
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
        margin-right: 10%;
        margin-top: 15%;
        text-transform: uppercase;
        font-size: 1rem;
        text-align: center;
        padding: 5px 20px;

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

    select {

        width: 100%;
        margin-top: 5px;
        border: solid transparent;
        color: #05132d;
        font-size: 0.9rem;
        padding: 20px;
    }
</style>

<div class="container">
    <div class="main1">
        <div class="head">
            <header>
                <h1>Update Your Password</h1>
            </header>
        </div>
        <div class="main">

            <form method="POST" action="{{ route('password.update') }}" autocomplete="on">
                @csrf


                @if (session('success'))
                <div class="alert alert-success" role="alert">
                   {{session('success')}}
                </div>
                @endif

                @if (session('error'))
                <div class="alert alert-danger" role="alert">
                   {{session('error')}}
                </div>
                @endif

                <div class="form-group row">
                    <label for="oldPassword" class="col-md-4 col-form-label text-md-right">{{ __('Current password') }}</label>

                    <div class="col-md-6">
                        <input id="oldPassword" type="password" class="form-control @error('oldPassword') is-invalid @enderror" name="oldPassword" required autocomplete="new-password" placeholder=" Your Current Password">

                        @error('oldPassword')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('New Password') }}</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder=" Your New Password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                    <div class="col-md-6">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Your Password">
                    </div>
                </div>


                <!-- ////////////////////////////////////////////// -->

                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit">
                            {{ __('Update Password') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="last"></div>


@endsection

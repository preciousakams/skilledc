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
                <h1>Register <br> For An Account</h1>
                <h4>Welcome To The Future Of <br> Reliable Business Transactions</h4>
            </header>
        </div>
        <div class="main">

            <form method="POST" action="{{ route('register') }}" autocomplete="on">
                @csrf

                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('First Name') }}</label>

                    <div class="col-md-6">
                        <input  id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                        value="{{ old('name') }}" required autocomplete="name" autofocus  placeholder="Your First Name">

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="lastname" class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}</label>

                    <div class="col-md-6">

                        <input  type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" required autocomplete="lastname"  placeholder="Your Last Name">
                        @error('lastname')

                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                    <div class="col-md-6">
                        <input  id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"  placeholder="Your Email Address">

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
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder=" Your Password">

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

                <div class="form-group row">
                    <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Phone Number') }}</label>

                    <div class="col-md-6">
                        <input  id="phone" type="text" class="form-control @error('phone')
                        is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone"  placeholder="Your Phone Number">

                        @error('phone')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="location" class="col-md-4 col-form-label text-md-right">{{ __('Business Location') }}</label>

                    <div class="col-md-6">

                        <input  type="text" class="form-control @error('location') is-invalid @enderror"
                        name="location" value="{{ old('location') }}" required autocomplete="Your Business location"  placeholder="Your Business Location">
                        @error('location')

                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <!-- ////////////////////////////////////////////////// -->


                <!-- ////////////////////////tryout/////////////////////////////// -->
                <div class="form-group row">
                    <label for="category" class="col-md-4 col-form-label text-md-right">{{ __('Area Of Specialty') }}</label>

                    <div class="col-md-6">
                        <select name="category">
                            <option value="" disabled selected>Select Your Area Of Specialty</option>
                            <Option value=" Science And Technological Service"> Science And Technological Services </Option>
                            <Option value=" Fitness And Wellness"> Fitness And Wellness </Option>
                            <Option value=" Educational Service"> Educational Services </Option>
                            <Option value=" Corporate Service"> Corporate Services </Option>
                            <Option value=" Arts And Crafts Technician"> Arts And Crafts Technicians </Option>
                            <Option value=" Furniture And Fixture"> Furniture And Fixtures </Option>
                            <Option value=" Repairs And Technical Support"> Repairs And Technical Support </Option>
                            <Option value=" Private Security Service"> Private Security Services </Option>
                            <Option value=" Event Handlers"> Event Handlers </Option>
                            <Option value=" Installation Technician"> Installation Technicians </Option>
                            <Option value=" Beauty And Lifestyle "> Beauty And Lifestyle </Option>
                            <Option value="  Architecture And Construction "> Architecture And Construction </Option>
                            <Option value=" Business Management And Administrative Service"> Business Management And Administrative Services </Option>
                            <Option value=" Financial Service"> Financial Services </Option>
                            <Option value=" Hospitality And Tourism"> Hospitality And Tourism </Option>
                            <Option value=" Law & Public Safety"> Law & Public Safety </Option>
                            <Option value=" Manufacturing"> Manufacturing </Option>
                            <Option value=" Marketing And Sale"> Marketing And Sales </Option>
                            <Option value=" Transportation, Distribution And Logistics"> Transportation, Distribution And Logistics </Option>

                        </select>
                    </div>
                </div>


                <!-- //////////////////////////end tryout///////////////////////// -->

                <div class="form-group row">
                    <label for="aboutven" class="col-md-4 col-form-label text-md-right">{{ __('About You') }}</label>

                    <div class="col-md-6">
                        <textarea  id="aboutven" type="text" class="form-control @error('aboutven') is-invalid @enderror" name="aboutven" value="{{ old('aboutven') }}" required placeholder="Tell Us About You And Your Business"></textarea>

                        @error('aboutven')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <!-- ////////////////////////////////////////////// -->

                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit">
                            {{ __('Create Account') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="last"></div>


@endsection

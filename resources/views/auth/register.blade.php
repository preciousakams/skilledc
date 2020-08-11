<x-layout>
    <x-header></x-header>
<!-- <x-authreg></x-authreg> -->
    <style>
        .head{
            text-align: center;
        }
        .last{
            margin: 100px;
        }
        .main {
            max-width: 400px;
            width: 100%;
            margin: 0 auto;
            position: relative;
            border: 5px solid #05132d;
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
            margin-top: 5%;
            text-transform: uppercase;
            font-size: 1rem;
            text-align: center;
            padding: 20px 40px 16px;
            box-sizing: inherit;


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
    </style>

    <div class="container">
        <div class="head">
        <header>
            <h1>SignUp <br> For An Account</h1>
            <h4>Welcome To The Future Of <br> Reliable Business Transactions</h4>
        </header>
        </div>
        <div class="main">
            <!-- <div class="grid-container"> -->
            <!-- <section> -->

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="form-group row">
                    <label for="firstname"><b>First Name</b> </label>
                    <input type="text" class="form-control @error('firstname') is-invalid @enderror" name="firstname" value="{{ old('firstname') }}" required autocomplete="name" autofocus placeholder="Your First name">
                    @error('firstname')

                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                </div>
                <div class="form-group row">
                    <label for="lastname"><b>Last Name</b> </label>
                    <input type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" required autocomplete="lastname" autofocus placeholder="Your Last name">
                    @error('lastname')

                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                </div>
                <div class="form-group row">
                    <label for="phone"><b>Phone Number</b> </label>
                    <input type="number" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" placeholder="Your Phone number">
                    @error('phone')

                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                </div>
                <div class="form-group row">
                    <label for="email"><b>Email</b> </label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Your Email">
                    @error('email')

                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                </div>
                <div class="form-group row">
                    <label for="password"><b>Password</b> </label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Your Password">
                    @error('password')

                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                </div>
                <div class="form-group row">
                    <label for="password-confirm"><b>Confirm Password</b></label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Repeat Your Password">
                    @error('password-confirm')

                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                </div>

                <div class="form-group row">
                    <label for="location"><b>Business Location</b></label>
                    <input type="text" class="form-control @error('location') is-invalid @enderror" name="location" value="{{ old('location') }}" required autocomplete="location" placeholder="Your Business Location">
                    @error('location')

                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                </div>
                <!-- <div class="form-group row"> -->
                <!-- <label for="businessDescription"><b>Business Category</b></label> -->
                <!-- <input type="text" placeholder="Your Business Description">
              
                <select id="dropdown">
                <option>Select Your Business Category</option>
                        <Option> Science And Technological Services </Option>
                        <Option> Fitness And Wellness </Option>
                        <Option> Educational Services </Option>
                        <Option> Corporate Services </Option>
                        <Option> Arts And Crafts Technicians </Option>
                        <Option> Furniture And Fixtures </Option>
                        <Option> Repairs And Technical Support </Option>
                        <Option> Private Security Services </Option>
                        <Option> Event Handlers </Option>
                        <Option> Installation Technicians </Option>
                        <Option> Beauty And Lifestyle </Option>
                        <Option> Architecture And Construction </Option>
                        <Option> Business Management And Administrative Services </Option>
                        <Option> Financial Services </Option>
                        <Option> Hospitality And Tourism </Option>
                        <Option> Law & Public Safety </Option>
                        <Option> Manufacturing </Option>
                        <Option> Marketing And Sales </Option>
                        <Option> Transportation, Distribution And Logistics </Option>
                    </select>
                </div> -->
                <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                <button type="submit">create account</button>
            </form>
            <!-- </section> -->
        </div>
    </div>
<div class="last"></div>
    <x-footer></x-footer>
</x-layout>
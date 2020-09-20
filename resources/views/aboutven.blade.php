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

    select{
        
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
            <h1>About You</h1>
            <h4>Sell Yourself To Prospective Clients</h4>
        </header>
    </div>
    <div class="main">

        <form method="POST" action="/aboutven">
            @csrf

            <div class="form-group row">
                <label for="aboutven" class="col-md-4 col-form-label text-md-right">{{ __('About You') }}</label>

                <div class="col-md-6">
                    <input autofocus id="aboutven" type="text" class="form-control"
                     name="aboutven" value="{{ old('aboutven') }}" required autocomplete="aboutven" 
                     autofocusocus placeholder="Briefly Tell Us About Your Business">

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

<!-- <script>tinymce.init({
  selector: 'textarea'
});
</script> -->

@endsection

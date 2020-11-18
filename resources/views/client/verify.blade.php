@extends('layouts.app')

@section('content')

<style>
    
    .card{
        margin: 20px;
        color: #05132d;
        text-align: center;
        font-size: 20px;
        background: linear-gradient(229.28deg, rgba(5, 19, 45, 0.39) 12.44%, rgba(134, 38, 150, 0.14) 29.04%, rgba(146, 128, 46, 0.37) 52.64%, rgba(5, 19, 45, 0.35) 74.56%);
        border: 5px solid #92802E;
        border-top-left-radius: 4.25rem;
        border-bottom-right-radius: 4.25rem;
    }
    .btn{
        color: white;
        font-size: 20px;
        font-weight: 10px;
        
    }
</style>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

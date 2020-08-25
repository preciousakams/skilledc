@extends('layouts.app')

@section('content')

<style>
    
    .card{
        margin: 20px;
        color:#05132d;
        text-align: center;
        font-size: 20px;
        background: linear-gradient(229.28deg, rgba(5, 19, 45, 0.39) 12.44%, rgba(134, 38, 150, 0.14) 29.04%, rgba(146, 128, 46, 0.37) 52.64%, rgba(5, 19, 45, 0.35) 74.56%);
        border: 5px solid #92802E;
        border-top-left-radius: 4.25rem;
        border-bottom-right-radius: 4.25rem;
    }
    .btn{
        color:#92802E;
        font-size: 20px;
        font-weight: 10px;
        background-color: #05132d;
        border-top-left-radius: 4rem;
        border-bottom-right-radius: 4rem;
        
    }
    #email{
        border-top-left-radius: 4rem;
        border-bottom-right-radius: 4rem;
    }
    #password{
        border-top-left-radius: 4rem;
        border-bottom-right-radius: 4rem;
    }
    #password-confirm{
        border-top-left-radius: 4rem;
        border-bottom-right-radius: 4rem;
    }

</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus placeholder="Your registered Email">

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Your new password">

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
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm your new password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Reset Password') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.app')

@section('content')

<style>
    .container {
              margin-top: 50px;
          }
          strong{
              color: #92802E;
          }
          .proof{
              text-align: center;
              margin-top: 20px;
          }
         .form1 {
            border: none;
            border-bottom: 1px solid #fff;
            outline: none;
            background: transparent;
            margin: 20px;
}
         }
      </style>
      <div class="container">
          <div class="row">
              <div class="col-sm-1">
                  <a><img src="images/avatar.png" class="rounded float-right" alt="..."></a>
              </div>
              <div class="col-sm-3">
                  <h3><strong> FullName </strong><br> {{ session('data')['name'] }} {{ session('data')['lastname'] }}</h3> </div>
                <div class="col-sm-3">  <h3><strong> Business Location </strong> <br> {{ session('data')['location'] }}</h3> </div>

                <div class="col-sm-5">   <h3><strong> Area Of Specialty </strong> <br> {{ session('data')['category'] }} </h3> </div>
            </div>
            <div class="row">
{{-- /////////////////////////// proof of work/////////////////////// --}}
                <div class="col-sm-12 proof">
                    <h2> Proof Of Work <strong>BenchMark </strong></h2>
                </div>
<div class="row">
            <form method="POST" action="{{ route('register') }}" autocomplete="on">
                @csrf
<div>
                    <label for="name" >{{ __('First Name') }}</label>

                        <input  class="form1" id="name" type="text" name="name" value="" readonly>
                        {{-- value="{{ old('name', $client->name) }}" --}}
                    <label for="lastname">{{ __('Last Name') }}</label>

                        <input  type="text" class="form1"  name="lastname" value="" readonly>
                        <label for="email">{{ __('E-Mail Address') }}</label>

                        <input  class="form1" id="email" type="email"  name="email" value=""readonly >
</div>
<div>

                    <label for="phone">{{ __('Phone Number') }}</label>

                        <input  class="form1" id="phone" type="text" name="phone" value="" readonly>

                    <label for="location">{{ __('Location') }}</label>

                        <input  type="text" class="form1" name="location" value="" readonly>

</div>
<div>

    <label for="pname">{{ __('Project descriptiom') }}</label>

        <input  class="form1" id="pname" type="text" name="pname" value="" required>

    <label for="pdescribe">{{ __('Project description') }}</label>
    <textarea id="pdescribe" class="form2" name="pdescribe" placeholder="Describe the project in details"></textarea>


</div>
                <!-- ////////////////////////////////////////////// -->

                        <button type="submit">
                            {{ __('Create Account') }}
                        </button>
            </form>

        </div>


@endsection

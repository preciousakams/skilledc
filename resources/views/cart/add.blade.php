@extends('layouts.app')

@section('content')

<style>
    .main {
        max-width: 100%;
        width: 95%;
        margin: 0 auto;
        position: relative;
        border: 20px solid #92802E;
        border-top-left-radius: 4.25rem;
        border-bottom-right-radius: 4.25rem;
        padding: 32px 32px 40px;
              /* margin-top: 50px; */
    }

    button {
        background-color: #05132d;
        color: #92802E;
        border-top-left-radius: 1.3rem;
        border-bottom-right-radius: 1.3rem;
        margin-left: 40%;
        margin-top: 15%;
        text-transform: uppercase;
        font-size: 1rem;
        text-align: center;
        padding: 10px 30px;

    }
    label {
        font-size: 1rem;
        font-weight:700;
        color: #05132d;
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
           #projectDesc{
               width: 50%;
             line-height: 50px;
               /* background-position: center; */
           }
      </style>
      <div class="main">
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
            <form method="POST" action="{{ route('cart.benchmark') }}" autocomplete="on" enctype="multipart/form-data">
                @csrf
<div>

                    <input  class="form1" id="vendorName" type="hidden" name="vendorName" value="{{ session('data')['name'] }}" >

                    <input  class="form1" id="vendorLastname" type="hidden" name="vendorLastname" value="{{ session('data')['lastname'] }}" >

                    <input  class="form1" id="vendorLocation" type="hidden" name="vendorLocation" value="{{ session('data')['location'] }}" >

                    <input  class="form1" id="vendorCategory" type="hidden" name="vendorCategory" value="{{ session('data')['category'] }}" >
    {{-- /////////////////////////////////////////////////////////////////////////////// --}}
                    <label for="clientName" >{{ __("Client's First Name") }}</label>

                        <input  class="form1" id="clientName" type="text" name="clientName" value="" >

                    <label for="clientLastname">{{ __("Client's Last Name") }}</label>

                        <input  type="text" class="form1"  name="clientLastname" value="" >

                        <label for="clientEmail">{{ __("Client's E-Mail") }}</label>

                        <input  class="form1" id="clientEmail" type="clientEmail"  name="clientEmail" value="" >
</div>
<div>

                    <label for="clientPhone">{{ __("Client's Phone Number") }}</label>

                        <input  class="form1" id="clientPhone" type="text" name="clientPhone" value="" >

                    <label for="clientLocation">{{ __("Client's Location") }}</label>

                        <input  type="text" class="form1" name="clientLocation" value="" >
                        <label for="projectName">{{ __('Project Name') }}</label>

        <input  class="form1" id="projectName" type="text" name="projectName" value="" required>


</div>
<div>

    <label for="projectCost">{{ __('Agreed Project Cost') }}</label>

    <input  type="number" class="form1" name="projectCost" value="" required>

    <label for="projectInitialDeposit">{{ __('Agreed Initial Deposit') }}</label>

    <input  type="number" class="form1" name="projectInitialDeposit" value="" required>

</div>
<div>
    <label for="projectDesc">{{ __('Project description') }}</label>
    <textarea id="projectDesc" class="form2" name="projectDesc" placeholder="Describe the project in details"></textarea>
</div>
<div>
    <label for="projectImage">Image Of Expected Project Result
        <br> <span class="text-small text-info">* This is Optional</span>
    </label>

    <input  type="file" class="form2" name="projectImage" value="" >

    <label for="projectTimeline">{{ __('Agreed Timeline For Project Completion') }}</label>

    <input  type="date" class="form1" id="datepicker" name="projectTimeline" value=""  placeholder="yy-mm-dd"   required>

</div>
                <!-- ////////////////////////////////////////////// -->

                        <button type="submit">
                            {{ __('Submit Benchmark') }}
                        </button>
            </form>

        </div>

@endsection

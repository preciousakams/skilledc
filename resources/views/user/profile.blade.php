@extends('layouts.app')

@section('content')


<style>
  .container {
            color: #05132d;
            margin-top: 50px;
        }
        #hire{
            background-color: #92802E;
        }
    </style>
    <div class="container">
        <div class="row profile">
            <div class="col-sm-2">
                <a><img src="https://res.cloudinary.com/wonderwoman/image/upload/v1591141936/placeholderWoman.png" class="rounded float-right" alt="..."></a>
            </div>
            <div class="col-sm-6">
                <h3><strong> FullName: </strong>{{$user->name}} {{$user->lastname}}</h3>
                <h3><strong> Business Location: </strong> {{$user->location}}</h3>
                <h3><strong> Area Of Specialty: </strong> {{$user->category}}
             </h3>
                <h3 style="color: #92802E"><strong style="color: #05132d">Verification Type :</strong> On Site</h3>
                <h3> <strong>Vendor Rating: </strong> </h3>
                <a><img src="/images/GOLD.png"></a>
            </div>
            <div class="col-sm-4">
                <h3 style="text-align: center"><strong> About Me</strong> <br>
                {{$user->aboutven}}
            </h3>

            </div>
        </div>

    </div>
    <div style="margin-top: 80px">
       <a href="{{route ('cart.add', $user->id )}} "> <img src="/images/Hire me.png"> </a>
       </div>
    <x-footer></x-footer>

@endsection
 <script type="text/javascript">
  document.title = `{{$user->name}}'s Profile`;
</script>

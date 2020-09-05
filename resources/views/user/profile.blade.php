@extends('layouts.app')

@section('content')
  
<!-- 
  {{$user->name}} -->
<style>
  .container {
            color: #05132d;
            margin-top: 50px;
        }
    </style>
    <div class="container">
        <div class="row profile">
            <div class="col-sm-3">
                <a><img src="https://res.cloudinary.com/wonderwoman/image/upload/v1591141936/placeholderWoman.png" class="rounded float-right" alt="..."></a>
            </div>
            <div class="col-sm-5">
                <h3><strong> FullName: </strong>{{$user->name}} {{$user->lastname}}</h3>
                <h3><strong> Business Location: </strong> {{$user->location}}</h3>
                <h3 style="text-align: center"><strong> Areas Of Specialty: </strong></h3>
                <h4>Lorem ipsum dolor sit amet con
                    <br> Lorem ipsum dolor sit amet con <br>
                    Lorem ipsum dolor sit amet con.
                </h4>
                <h3 style="color: #92802E"><strong style="color: #05132d">Verification Type :</strong> On Site</h3>
                <h3> <strong>Vendor Rating: </strong> </h3>
                <a><img src="images/GOLD.png"></a>
            </div>
            <div class="col-sm-4">
                <h3 style="text-align: center"><strong> About Me </strong></h3>
                <h4> brief sales pitch. Lorem ipsum dolor, sit amet <br>
                    consectetur adipisicing elit. Quo ut minima perferendis,<br>
                    veritatis laudantium earum mollitia odio officia tempora <br>
                    ullam consequuntur sit cum modi <br>
                    voluptatibus dolores corrupti sunt rem cupiditate?
                </h4>
            </div>
        </div>

    </div>
    <x-footer></x-footer>

@endsection
 <script type="text/javascript">
  document.title = `{{$user->name}}'s Profile`;
</script>
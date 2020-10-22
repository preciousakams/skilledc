@extends('layouts.app')

@section('content')

<style>
    main{
      margin-top: 50px;

    }
      .box-shadow {
        box-shadow: 0 .25rem .75rem rgba(0, 0, 0, .05);
      }

      .stars-outer {
        display: inline-block;
        position: relative;
        font-family: FontAwesome;
      }

      .stars-outer::before {
        content: "\f006 \f006 \f006 \f006 \f006";
      }

      .stars-inner {
        position: absolute;
        top: 0;
        left: 0;
        white-space: nowrap;
        overflow: hidden;
      }

      .stars-inner::before {
        content: "\f005 \f005 \f005 \f005 \f005";
        color: #92802E;
      }
      .verify {
        color: #05132d;
      }

      .box-shadow {
        background-color: #f7f7f7;
        color: #05132d;
        border: solid transparent;
              border-top-left-radius: 1.3rem;
              border-bottom-right-radius: 1.3rem;
      }
      .card-text{

          font-size: 15px;
          font-weight: bold;
      }
      strong{
          color: #92802E;
          font-size: px;
      }
    </style>

<main role="main">

<main>



     <div class="container text-center">
       <h1 class="jumbotron-heading">Furniture And Fixture Services</h1>
       <p class="lead text-muted">List of Service providers in the Furniture And Fixture Service category </p>
     </div>

       <div class="container">
         <div class="row">

            @foreach ($users as $user)
           <div class="col-sm-6 col-md-4 col-lg-3">
             <div class="card mb-2 box-shadow">
               <img class="card-img-top" src="images/avatar.png" alt="Card image cap">
               <div class="card-body">
                 <p class="card-text"> <strong>Name:</strong> {{$user->name}} {{$user->lastname}} </p>
                 <p class="card-text"> <strong> Specialty: </strong> {{$user->category}} </p>
                   <p class="card-text"><strong> Location: </strong> {{$user->location}}  </p>
                   <p class="card-text"><strong> User Rating: </strong> </p>

                 <div class="stars-outer">
                   <div class="stars-inner" style="width: 43%"></div>
                   <div class="verify">Verified
                       <i class="fas fa-certificate"></i>
                     </div>
                 </div>
               </div>
             </div>
           </div>
           @endforeach
         </div>
       </div>

    </main>
    <x-footer></x-footer>
     @endsection


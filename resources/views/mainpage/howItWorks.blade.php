@extends('layouts.app')

@section('content')
  
    <style>
      .row{
          margin-top: 50px;
      }
      .container{
        text-align: center;
        margin-top: 50px;
      }
    </style>

    <div class="container">
       <h1><strong> How It Works </strong></h1>
        <div class="row profile">
            
        <div class="col-sm-4 d-none d-md-block">
            <a><img src="images/Frame 1.png"></a> 
           
            </div> 
            <div class="col-sm-8">
            <a><img src="images/Frame 2.png"></a>  
            </div>
        </div>
        <div class="row profile">
            
        <div class="col-sm-4 d-none d-md-block">
            <a><img src="images/step2.png"></a> 
           
            </div> 
            <div class="col-sm-8">
            <a><img src="images/content2.png"></a>  
            </div>
        </div>
        <div class="row profile">
            
        <div class="col-sm-4 d-none d-md-block">
            <a><img src="images/step3.png"></a> 
           
            </div> 
            <div class="col-sm-8">
            <a><img src="images/content3.png"></a>  
            </div>
        </div>
    </div>

    <x-footer></x-footer>
@endsection
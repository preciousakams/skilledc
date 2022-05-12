@extends('layouts.app')

@section('content')
   

<style>
    .tester_new {
	padding: 20px 0 100px;
}
.tester_new hr {
    width: 100px;
    border: 0.5px solid #05132d;
    
}
.tester_new .carousel-item p {
	color:#05132d;
	line-height: 28px;
    letter-spacing: 1px;
    font-size: 20px;
} 
.tester_new .carousel-item hr {
	width: 100px;
}
.tester_new .carousel-item h4 {
	font-weight: 700;
	margin-bottom: 0;
}
h1{
    color:#92802E;
}
</style>

<div class="container">
<div class="row">
<div class="col-12">
<section class="tester_new text-center">
  <h1 class="mt-5">Testimonials</h1>
  <hr>
  <div class="container">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <!-- <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol> -->
      <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
          <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
              <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                  sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. "
                </p>
              <hr>
              <h4>Cynthia Nelson</h4>
              <h6>Student of life</h6>
            </div>
            <div class="col-lg-2"></div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
            <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                  sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. "
                </p>
                <hr>
              <h4>Kevin Rich</h4>
             <h6>Student of life</h6>
            </div>
            <div class="col-lg-2"></div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
            <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                  sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit,"
                </p> 
            <hr>
              <h4>John Doe</h4>
              <h6>Student of life</h6>
            </div>
            <div class="col-lg-2"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</div>
</div>
</div>

<x-footer></x-footer>

@endsection
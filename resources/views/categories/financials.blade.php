@extends('layouts.app')

@section('content')

  <style>
  main{
    margin-top: 50px;
    
  }
  .album{
    background: linear-gradient(229.28deg, rgba(5, 19, 45, 0.39) 12.44%, rgba(134, 38, 150, 0.14) 29.04%, rgba(146, 128, 46, 0.37) 52.64%, rgba(5, 19, 45, 0.35) 74.56%);
            backdrop-filter: blur(4px); 
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
    
  </style>
  <main role="main">

    <!-- <section class="jumbotron text-center"> -->
    <div class="container text-center">
      <h1 class="jumbotron-heading">Financial Services</h1>
      <p class="lead text-muted">List of Service providers in the Financial Service category </p>
    </div>
    <!-- </section> -->

    <div class="album py-5 bg-light">
      <div class="container">

        <div class="row">
          <div class="col-md-2">
            <div class="card mb-2 box-shadow">
              <img class="card-img-top" src="https://res.cloudinary.com/wonderwoman/image/upload/v1591141934/placeholderMan.png" alt="Card image cap">
              <div class="card-body">
                <p class="card-text">
                  vendor full name <br>
                  service specialty <br>
                  location 
                </p>
                <div class="stars-outer">
                  <div class="stars-inner" style="width: 43%"></div>
                  <div class="verify">
                    Verified 
                      <i class="fas fa-certificate"></i> 
                    </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-2">
            <div class="card mb-2 box-shadow">
              <img class="card-img-top" src="https://res.cloudinary.com/wonderwoman/image/upload/v1591141934/placeholderMan.png" alt="Card image cap">
              <div class="card-body">
                <p class="card-text">
                  vendor full name <br>
                  service specialty <br>
                  location 
                </p>
                <div class="stars-outer">
                  <div class="stars-inner" style="width:90%"></div>

                  <div class="verify">
                    Verified
                     <i class="fas fa-certificate"></i> 
                    </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-2">
            <div class="card mb-2 box-shadow">
              <img class="card-img-top" src="https://res.cloudinary.com/wonderwoman/image/upload/v1591141934/placeholderMan.png" alt="Card image cap">
              <div class="card-body">
                <p class="card-text">
                  vendor full name <br>
                  service specialty <br>
                  location 
                </p>
                <div class="stars-outer">
                  <div class="stars-inner" style="width: 10%"></div>
                  <div class="verify">
                    <!-- Verified -->
                     <!-- <i class="fas fa-certificate"></i>  -->
                    </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-2">
            <div class="card mb-2 box-shadow">
              <img class="card-img-top" src="https://res.cloudinary.com/wonderwoman/image/upload/v1591141934/placeholderMan.png" alt="Card image cap">
              <div class="card-body">
                <p class="card-text">
                  vendor full name <br>
                  service specialty <br>
                  location 
                </p>
                <div class="stars-outer">
                  <div class="stars-inner" style="width: 0"></div>

                  <div class="verify">
                    <!-- Verified -->
                     <!-- <i class="fas fa-certificate"></i>  -->
                    </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-2">
            <div class="card mb-2 box-shadow">
              <img class="card-img-top" src="https://res.cloudinary.com/wonderwoman/image/upload/v1591141934/placeholderMan.png" alt="Card image cap">
              <div class="card-body">
                <p class="card-text">
                  vendor full name <br>
                  service specialty <br>
                  location 
                </p>
                <div class="stars-outer">
                  <div class="stars-inner" style="width: 0"></div>

                  <div class="verify">
                    <!-- Verified -->
                     <!-- <i class="fas fa-certificate"></i>  -->
                    </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-2">
            <div class="card mb-2 box-shadow">
              <img class="card-img-top" src="https://res.cloudinary.com/wonderwoman/image/upload/v1591141934/placeholderMan.png" alt="Card image cap">
              <div class="card-body">
                <p class="card-text">
                  vendor full name <br>
                  service specialty <br>
                  location 
                </p>
                <div class="stars-outer">
                  <div class="stars-inner" style="width: 0"></div>

                  <div class="verify">
                    <!-- Verified -->
                     <!-- <i class="fas fa-certificate"></i>  -->
                    </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-2">
            <div class="card mb-2 box-shadow">
              <img class="card-img-top" src="https://res.cloudinary.com/wonderwoman/image/upload/v1591141934/placeholderMan.png" alt="Card image cap">
              <div class="card-body">
                <p class="card-text">
                  vendor full name <br>
                  service specialty <br>
                  location 
                </p>
                <div class="stars-outer">
                  <div class="stars-inner" style="width: 0"></div>

                  <div class="verify">
                    <!-- Verified -->
                     <!-- <i class="fas fa-certificate"></i>  -->
                    </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-2">
            <div class="card mb-2 box-shadow">
              <img class="card-img-top" src="https://res.cloudinary.com/wonderwoman/image/upload/v1591141934/placeholderMan.png" alt="Card image cap">
              <div class="card-body">
                <p class="card-text">
                  vendor full name <br>
                  service specialty <br>
                  location 
                </p>
                <div class="stars-outer">
                  <div class="stars-inner" style="width: 0"></div>

                  <div class="verify">
                    <!-- Verified -->
                     <!-- <i class="fas fa-certificate"></i>  -->
                    </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-2">
            <div class="card mb-2 box-shadow">
              <img class="card-img-top" src="https://res.cloudinary.com/wonderwoman/image/upload/v1591141934/placeholderMan.png" alt="Card image cap">
              <div class="card-body">
                <p class="card-text">
                  vendor full name <br>
                  service specialty <br>
                  location 
                </p>
                <div class="stars-outer">
                  <div class="stars-inner" style="width: 0"></div>

                  <div class="verify">
                    <!-- Verified -->
                     <!-- <i class="fas fa-certificate"></i>  -->
                    </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-2">
            <div class="card mb-2 box-shadow">
              <img class="card-img-top" src="https://res.cloudinary.com/wonderwoman/image/upload/v1591141934/placeholderMan.png" alt="Card image cap">
              <div class="card-body">
                <p class="card-text">
                  vendor full name <br>
                  service specialty <br>
                  location 
                </p>
                <div class="stars-outer">
                  <div class="stars-inner" style="width: 0"></div>

                  <div class="verify">
                    <!-- Verified -->
                     <!-- <i class="fas fa-certificate"></i>  -->
                    </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-2">
            <div class="card mb-2 box-shadow">
              <img class="card-img-top" src="https://res.cloudinary.com/wonderwoman/image/upload/v1591141934/placeholderMan.png" alt="Card image cap">
              <div class="card-body">
                <p class="card-text">
                  vendor full name <br>
                  service specialty <br>
                  location 
                </p>
                <div class="stars-outer">
                  <div class="stars-inner" style="width: 0"></div>

                  <div class="verify">
                    <!-- Verified -->
                     <!-- <i class="fas fa-certificate"></i>  -->
                    </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-2">
            <div class="card mb-2 box-shadow">
              <img class="card-img-top" src="https://res.cloudinary.com/wonderwoman/image/upload/v1591141934/placeholderMan.png" alt="Card image cap">
              <div class="card-body">
                <p class="card-text">
                  vendor full name <br>
                  service specialty <br>
                  location 
                </p>
                <div class="stars-outer">
                  <div class="stars-inner" style="width: 0"></div>

                  <div class="verify">
                    <!-- Verified -->
                     <!-- <i class="fas fa-certificate"></i>  -->
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </main>
  <x-footer></x-footer>
@endsection
@extends('layouts.app')

@section('content')
  

    <style>
        .contact-info .fa {
  padding-right: 5px;
}

#contact .form-control {
  border: none;
  border-bottom: 2px solid #92802E;
  border-radius: 0px;
  box-shadow: none;
  font-size: 18px;
  margin-top: 10px;
  margin-bottom: 10px;
  -webkit-transition: all ease-in-out 0.4s;
  transition: all ease-in-out 0.4s;
}

#contact {
     margin-top: 120px;
}

#contact input {
  height: 55px;
}

#contact button#submit {
  background: #92802E;
  border: none;
  border-radius: 50px;
  color: #05132d;
  height: 50px;
  margin-top: 24px;
}

#contact button#submit:hover {
  background: #05132d;
  color: #f7f7f7;
}
.container{
    color:#05132d;
}

</style>

    <section id="contact" class="parallax-section">
     <div class="container">
          <div class="row">

               <div class="col-md-12 col-sm-12">
                    <!-- SECTION TITLE -->
                    <div class="wow fadeInUp section-title" data-wow-delay="0.2s">
                         <h2>Get in touch</h2>
                         <p>Lorem ipsum dolor sit amet, consectetur venenatis tincidunt.</p>
                    </div>
               </div>

               <div class="col-md-7 col-sm-10">
                    <!-- CONTACT FORM HERE -->
                    <div class="wow fadeInUp" data-wow-delay="0.4s">
                        <form id="contact-form" action="#" method="get">
                              <div class="col-md-6 col-sm-6">
                                   <input type="text" class="form-control" name="name" placeholder="Name" required="">
                              </div>
                              <div class="col-md-6 col-sm-6">
                                   <input type="email" class="form-control" name="email" placeholder="Email" required="">
                              </div>
                              <div class="col-md-12 col-sm-12">
                                   <textarea class="form-control" rows="5" name="message" placeholder="Message" required=""></textarea>
                              </div>
                              <div class="col-md-offset-8 col-md-4 col-sm-offset-6 col-sm-6">
                                   <button id="submit" type="submit" class="form-control" name="submit">Send Message</button>
                              </div>
                        </form>
                    </div>
               </div>

               <div class="col-md-5 col-sm-8">
                    <!-- CONTACT INFO -->
                    <div class="wow fadeInUp contact-info" data-wow-delay="0.4s">
                         <div class="section-title">
                              <h2>Contact Info</h2>
                              <p>Lorem ipsum dolor sit consectetur adipiscing morbi venenatis et tortor consectetur adipisicing lacinia tortor morbi ultricies.</p>
                         </div>
                         
                         <p><i class="fa fa-map-marker"></i> 456 New Street 22000, bla bla bla Nigeria</p>
                         <p><i class="fa fa-comment"></i> <a href="mailto:info@companyemail.com">info@companyemail.com</a></p>
                         <p><i class="fa fa-phone"></i> 080262292022</p>
                         <p><i class="fa fa-phone"></i> 080262292022</p>
                    </div>
               </div>

          </div>
     </div>
</section>


    <x-footer></x-footer>
@endsection
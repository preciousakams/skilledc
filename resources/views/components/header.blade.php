<style>
  .dropdown-menu{
    background-color: #92802E;
    color: #05132d;
  }
  .navbar{
    background-color: #05132d;
    
  }
  .nav-item{
    font-size: 17px;
  }
</style>

<nav class="navbar navbar-expand-lg navbar-dark navbar-custom ">
  <div class="">
    <a class="navbar-brand" href="/"><img src="https://res.cloudinary.com/wonderwoman/image/upload/v1590940835/myportfolio/logo_r6k0el.jpg"></a>
  </div>
  <div class="container">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav justify-content-center" style=" font-weight: bold;
        font-size: 20px;">
        <li class="nav-item ">
          <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/about">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/team">Team</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/howItWorks">How It Works</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/contact">Contact Us</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="DropdownMenu" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Service Providers</a>
          <div class="dropdown-menu">
      <a class="dropdown-item" href="/tech">Science And Technological Services</a>
      <a class="dropdown-item" href="/fitness">Fitness And Wellness</a>
      <a class="dropdown-item" href="/education">Educational Services</a>
      <a class="dropdown-item" href="/corporate">Corporate Services</a>
      <a class="dropdown-item" href="/crafts">Arts And Crafts Technicians</a>
      <a class="dropdown-item" href="/furniture">Furniture And Fixtures</a>
      <a class="dropdown-item" href="/repair">Repairs And Technical Support</a>
      <a class="dropdown-item" href="/security">Private Security Services</a>
      <a class="dropdown-item" href="/event">Event Handlers</a>
      <a class="dropdown-item" href="/installation">Installation Technicians</a>
      <a class="dropdown-item" href="/lifestyle">Beauty And Lifestyle </a>
      <a class="dropdown-item" href="/construction"> Architecture And Construction </a>
      <a class="dropdown-item" href="/business">Business Management And Administrative Services</a>
      <a class="dropdown-item" href="/financials">Financial Services</a>
      <a class="dropdown-item" href="/hospitality">Hospitality And Tourism</a>
      <a class="dropdown-item" href="/law&safety">Law & Public Safety</a>
      <a class="dropdown-item" href="/manufacturing">Manufacturing</a>
      <a class="dropdown-item" href="/mkting&sales">Marketing And Sales</a>
      <a class="dropdown-item" href="/distribution">Transportation, Distribution And Logistics</a>
        </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/testimonial">Testimonials</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="/faq">FAQ</a>
        </li>
      </ul>
      <ul class="navbar-nav justify-content-right" style=" font-weight: bold;
      font-size: 20px;">
        
        <li class="nav-item">
          <a class="nav-link" href="/register">SignUp</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/login">Login</a>
        </li>
      </ul>
    </div>
  </div>
</nav>


{{$slot}}
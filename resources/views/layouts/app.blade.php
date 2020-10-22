<x-layout>
<body>
    <style>
        .dropdown-menu {
            background-color:#05132d;

        }

        .dropdown-item {
            color: #92802E;
            font-size: 20px;
        }

        .navbar {
            background-color: #05132d;

        }

        .nav-item {
            font-size: 17px;

        }
        .tester{
            margin-left: 10%;
        }
        /* .navs{
            margin-right: 22%;
        } */
    </style>

    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-dark navbar-custom">
            <div class="" style="padding-right: 10%;">
                <a class="navbar-brand" href="/"><img src="https://res.cloudinary.com/wonderwoman/image/upload/v1590940835/myportfolio/logo_r6k0el.jpg"></a>
            </div>
            <div class="container">

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->

                    <ul class="navbar-nav justify-content-center" style=" font-weight: bold;
                         font-size: 20px;">
                        <li class="nav-item" style="padding-right:2%;">
                            <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                        </li>

                        <li class="nav-item dropdown" style="padding-right:2%;">
                            <a class="nav-link dropdown-toggle" href="#" id="DropdownMenu" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="/about">About Us</a>
                                <a class="dropdown-item" href="/team">Meet The Team</a>
                                <a class="dropdown-item" href="/howItWorks">How It Works</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown" style="padding-right:2%;">
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
                                <a class="dropdown-item" href="/law">Law & Public Safety</a>
                                <a class="dropdown-item" href="/manufacturing">Manufacturing</a>
                                <a class="dropdown-item" href="/mkting">Marketing And Sales</a>
                                <a class="dropdown-item" href="/distribution">Transportation, Distribution And Logistics</a>
                            </div>
                        </li>

                        <li class="nav-item" style="padding-right:2%">
                            <a class="nav-link" href="/contact">Contact</a>
                        </li>
                        <li class="nav-item" style="padding-right:2%;">
                            <a class="nav-link" href="/testimonial">Testimonials</a>
                        </li>
                        <li class="nav-item" style="padding-right:2%;">
                            <a class="nav-link" href="/faq">FAQ</a>
                        </li>
                    </ul>

                    <div class="tester">
                      <!-- Right Side Of Navbar -->
                      <ul class=" navbar-nav justify-content-right" style=" font-weight: bold;
                        font-size: 20px;">
                        <!-- Authentication Links -->
                        @guest
                        <li class="nav-item" style="padding-right:2%;">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                               <a class="dropdown-item" href="{{ route('user.profile', Auth::user()->id )}}">
                                    {{ __('View Profile') }}
                                </a>
                                <a class="dropdown-item" href="{{ route('user.edit')}}">
                                    {{ __('Update Profile') }}
                                </a>
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                       </ul>
                    </div>
                </div>
        </nav>

        <main class="py-4">
        @yield('content')
        </main>
    </div>

</body>
</x-layout>

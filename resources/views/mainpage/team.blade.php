@extends('layouts.app')

@section('content')
    
    <style>
        .row.heading h2 {
            color: #05132d;
            font-size: 52.52px;
            line-height: 95px;
            font-weight: 400;
            text-align: center;
            margin: 0 0 40px;
            padding-bottom: 20px;
            text-transform: uppercase;
        }

        ul {
            margin: 0;
            padding: 0;
            list-style: none;
        }

        .heading.heading-icon {
            display: block;
        }

        .padding-lg {
            display: block;
            padding-top: 60px;
            padding-bottom: 60px;
        }

        .practice-area.padding-lg {
            padding-bottom: 55px;
            padding-top: 55px;
        }

        .practice-area .inner {
            border: 1px solid lime;
            text-align: center;
            margin-bottom: 28px;
            padding: 40px 25px;
        }

        .mainSection .cnt-block:hover {
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
            border: 0;
        }

        .practice-area .inner h3 {
            color: #3c3c3c;
            font-size: 24px;
            font-weight: 500;
            font-family: 'Poppins', sans-serif;
            padding: 10px 0;
        }

        .practice-area .inner p {
            font-size: 14px;
            line-height: 22px;
            font-weight: 400;
        }

        .practice-area .inner img {
            display: inline-block;
        }


        .mainSection {
            /* background-color: #f7f7f7; */
           
        }

        .mainSection .cnt-block {
            float: left;
            width: 100%;
            background: #05132d;
            padding: 30px 20px;
            text-align: center;
            border: 2px solid #d5d5d5;
            margin: 0 0 28px;
            border-radius: 40%;
        }

        .mainSection .cnt-block figure {
            width: 148px;
            height: 148px;
            border-radius: 100%;
            display: inline-block;
            margin-bottom: 15px;
        }

        .mainSection .cnt-block img {
            width: 148px;
            height: 148px;
            border-radius: 100%;
        }

        .mainSection .cnt-block h3 {
            color: #f7f7f7;
            font-size: 20px;
            font-weight: 500;
            padding: 6px 0;
            text-transform: uppercase;
        }

        .mainSection .cnt-block h3 a {
            text-decoration: none;
            color: #f7f7f7;
        }

        .mainSection .cnt-block h3 a:hover {
            color: #92802E;
        }

        .mainSection .cnt-block p {
            color: #f7f7f7;
            font-size: 13px;
            line-height: 20px;
            font-weight: 400;
        }

        .mainSection .cnt-block .follow-us {
            margin: 20px 0 0;
        }

        .mainSection .cnt-block .follow-us li {
            display: inline-block;
            width: auto;
            margin: 0 5px;
        }

        .mainSection .cnt-block .follow-us li .fa {
            font-size: 24px;
            color: #92802E;
        }

        .mainSection .cnt-block .follow-us li .fa:hover {
            color: #f7f7f7;
        }
    </style>
    <section class="mainSection padding-lg">
        <div class="container">
            <div class="row heading heading-icon">
                <h2>Meet Our Team</h2>
            </div>
            <ul class="row">
                <li class="col-12 col-md-6 col-lg-3">
                    <div class="cnt-block equal-hight" style="height: 349px;">
                        <figure><img src="https://res.cloudinary.com/wonderwoman/image/upload/v1591141936/placeholderWoman.png" class="img-responsive" alt=""></figure>
                        <h3><a href="#">jane doe</a></h3>
                        <p>job title</p>
                        <ul class="follow-us clearfix">
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </li>
                <li class="col-12 col-md-6 col-lg-3">
                    <div class="cnt-block equal-hight" style="height: 349px;">
                        <figure><img src="https://res.cloudinary.com/wonderwoman/image/upload/v1591141934/placeholderMan.png" class="img-responsive" alt=""></figure>
                        <h3><a href="#">john doe </a></h3>
                        <p>job title</p>
                        <ul class="follow-us clearfix">
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </li>
                <li class="col-12 col-md-6 col-lg-3">
                    <div class="cnt-block equal-hight" style="height: 349px;">
                        <figure><img src="https://res.cloudinary.com/wonderwoman/image/upload/v1591141936/placeholderWoman.png" class="img-responsive" alt=""></figure>
                        <h3><a href="#">jane doe </a></h3>
                        <p>job title</p>
                        <ul class="follow-us clearfix">
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </li>
                <li class="col-12 col-md-6 col-lg-3">
                    <div class="cnt-block equal-hight" style="height: 349px;">
                        <figure><img src="https://res.cloudinary.com/wonderwoman/image/upload/v1591141934/placeholderMan.png" class="img-responsive" alt=""></figure>
                        <h3><a href="#">john doe </a></h3>
                        <p>job title</p>
                        <ul class="follow-us clearfix">
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <x-footer></x-footer>
@endsection
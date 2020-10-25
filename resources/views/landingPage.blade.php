<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    <script src="https://kit.fontawesome.com/7967e81f77.js" crossorigin="anonymous"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="{{ asset('node_modules/tinymce/tinymce.js') }}"></script>



    <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5ed6ed039e5f6944228fc1d1/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
    <title>Register</title>
</head>
<body>

    <style>
       main{
            backdrop-filter: blur(4px);
        font-family: 'Times New Roman', Times, serif;
        height: 100%;
        position: relative;
        color: white;
        min-height: 100vh;

        background: linear-gradient(-45deg,#92802E,#05245e, #0a5194);
	background-size: 400% 400%;
	animation: gradient 5s ease infinite;

        }

        @keyframes gradient {
	0% {
		background-position: 0% 50%;
	}
	50% {
		background-position: 100% 50%;
	}
	100% {
		background-position: 0% 50%;
	}
}

        .container{
            padding-top: 20%;
            position: relative;
        }
       a{
            margin: 0;
             position: absolute;
             top: 50%;
             left: 50%;
             -ms-transform: translate(-50%, -50%);
             transform: translate(-50%, -50%);

            margin-top: 15%;
            border-top-left-radius: 1.3rem;
            border-bottom-right-radius: 1.3rem;
            color:#92802E;
            text-transform: uppercase;
            background-color: #05132d;
            padding: 10px;
        }


    </style>

    <main>

    <div class="container">

        <div class="row">
        <div class="col-sm-6 ">
            <h1>
             Are you a client searching for creditble professionals?
             </h1>
        </div>
        <div class="col-sm-6 ">
            <h1>
             Are you a professional, intending to render a service?
            </h1>
        </div>
        <div class="col-sm-6" >
            <a href="{{route('register')}} "> Register Here </a>
        </div>
        <div class="col-sm-6">
            <a href="{{route('register')}} "> Register Here </a>
         </div>
        </div>
    </div>
</main>
</body>
</html>

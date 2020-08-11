<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Skilled City</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    <script src="https://kit.fontawesome.com/7967e81f77.js" crossorigin="anonymous"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

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
<!--End of Tawk.to Script-->
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">
    <style>
        #page-container {
            background: linear-gradient(229.28deg, rgba(5, 19, 45, 0.39) 12.44%, rgba(134, 38, 150, 0.14) 29.04%, rgba(146, 128, 46, 0.37) 52.64%, rgba(5, 19, 45, 0.35) 74.56%);
            backdrop-filter: blur(4px); 
        font-family: 'Times New Roman', Times, serif;
        height: 100%;
        position: relative;
        color: #05132d;
       
        min-height: 100vh;
        }
        #content-wrap {
         padding-bottom: 2.5rem;
        }
    </style>
    <div id="page-container">
    <div id="content-wrap">
    {{$slot}}
    </div>
    </div>
</body>
</html>
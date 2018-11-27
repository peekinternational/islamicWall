
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <title>Islamic Wall</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}" />

     <!-- Bootstrap checking -->
    <link href="{{url('frontend-assets/css/bootstrap.min.css')}}" rel='stylesheet' type='text/css' />
    
    <link href="{{url('frontend-assets/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
    <!-- start plugins -->
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend-assets/css/font-awesome.css')}}">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    
    <script type="text/javascript" src="{{url('frontend-assets/js/jquery.min.js')}}"></script>
   
    <script type="text/javascript" src="{{url('frontend-assets/js/bootstrap.min.js')}}"></script>
    <!-- start slider -->
    <link href="{{url('css/slider.css')}}" rel="stylesheet" type="text/css" media="all" />
    <script type="text/javascript" src="{{url('frontend-assets/js/jquery.cslider.js')}}"></script>
        
    
    <!-- Owl Carousel Assets -->
    <link href="{{url('frontend-assets/css/owl.carousel.css')}}" rel="stylesheet">
     
	
  </head>
  <body>
    @include('frontend.includes.header')

    <!-- @yield('inner-header') -->

    @yield('content')

    @include('frontend.includes.footer')


    <!--Scroll to top Button-->
    
    @yield('page-footer')


    <script>
    var myIndex = 0;
    carousel();

    function carousel() {
        var i;
        var x = document.getElementsByClassName("mySlides");
        for (i = 0; i < x.length; i++) {
           x[i].style.display = "none";  
        }
        myIndex++;
        if (myIndex > x.length) {myIndex = 1}    
        x[myIndex-1].style.display = "block";  
        setTimeout(carousel, 2000); // Change image every 2 seconds
    }
    </script>
    <script type="text/javascript">
        $(function() {

            $('#da-slider').cslider({
                autoplay : true,
                bgincrement : 450
            });

        });
    </script>
  

    <script src="{{('https://use.fontawesome.com/7518055ce7.js')}}"></script>
    </body>
</html>
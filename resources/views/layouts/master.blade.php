<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">-->

    <title>BlogSite</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/bootstrap5.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('frontend/css/custom.css')}}">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{asset('frontend/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/templatemo-stand-blog.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/owl.css')}}">


  </head>

  <body>

      

        @include ('layouts.inc.nav')

        <div class="container">

          @if(($errors->any()))
          @foreach ($errors->all() as $error)
          <div class="alert alert-danger" role="alert">
            {{$error}}
          </div>
          @endforeach
          @endif
        </div>
        
        
          <div id="main">
            @yield('content')
          </div>
     
        <div id="footer">
          @include ('layouts.inc.footer')
        </div>
    
      




        <!-- Bootstrap core JavaScript -->
    <script src="{{asset('frontend/js/jquery.min.js')}}"></script>
    <script src="{{asset('frontend/js/bootstrap.bundle.min.js')}}"></script>
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>-->
    
    @include ('layouts.inc.js')
    
    <!-- Additional Scripts -->
   <script src="{{asset('frontend/js/custom.js')}}"></script>
    <script src="{{asset('frontend/js/owl.js')}}"></script>
    <script src="{{asset('frontend/js/slick.js')}}"></script>
    <script src="{{asset('frontend/js/isotope.js')}}"></script>
    <script src="{{asset('frontend/js/accordions.js')}}"></script>


      </body>
</html>
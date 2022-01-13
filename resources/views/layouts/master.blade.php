<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">

    <title>BlogSite</title>

    <!-- Bootstrap core CSS -->
    <link href="frontend/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="frontend/css/fontawesome.css">
    <link rel="stylesheet" href="frontend/css/templatemo-stand-blog.css">
    <link rel="stylesheet" href="frontend/css/owl.css">


  </head>

  <body>

      
        @include ('layouts.inc.nav')
    
        
          @yield('content')
        

        @include ('layouts.inc.footer')
    




        <!-- Bootstrap core JavaScript -->
    <script src="frontend/js/jquery.min.js"></script>
    <script src="frontend/js/bootstrap.bundle.min.js"></script>

    <!-- Additional Scripts -->
   <script src="frontend/js/custom.js"></script>
    <script src="frontend/js/owl.js"></script>
    <script src="frontend/js/slick.js"></script>
    <script src="frontend/js/isotope.js"></script>
    <script src="frontend/js/accordions.js"></script>


      </body>
</html>
<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>COOPER FELLOWSHIP</title>
        <meta name="description" content="A guide to sobriety at Cooper Fellowship.">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <script language="JavaScript" type="text/javascript" src="scripts/jquery-3.3.1.min.js"></script>
        <script language="JavaScript" type="text/javascript" src="scripts/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <link rel="stylesheet" href="styles/bootstrap.min.css" media=screen>
        <link rel="stylesheet" href="styles/main.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>


    </head>
    <body>
        
        
<div class="p-3 mb-2 bg-primary-dark text-light">
    
<!-- Begin Header -->    
       
<div class="container-fluid" style="background-color:transparent;color:#fff;height:120px;">
 <div class="row">
    <div class="col"></div>
    <div class="col-6">
        <h1 class="text-white">Cooper Fellowship</h1>
    </div>
    <div class="col"></div>
 </div>   
 <div class="row">
    <div class="col"></div>
    <div class="col-6">
        <h4 class="text-light">A sober living community</h4>
    </div>
    <div class="col"></div>
 </div>
</div>

<div class="nav-container" data-spy="affix" data-offset-top="120">
<nav class="navbar navbar-expand-sm navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand col-3">Cooper<br> Fellowship</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
      </button>


  <div class="collapse navbar-collapse text-center" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-2">
    <div class="row">
      <li class="nav-item col-12 col-sm-4 active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item col-12 col-sm-4">
        <a class="nav-link" href="program.html">About</a>
      </li>
      <li class="nav-item col-12 col-sm-4">
        <a class="nav-link" href="#">Contact</a>
      </li>
    </div>
    </ul>
  </div>
</nav>
</div>
        <!-- End Header -->

        
            
   <!-- Begin Page -->
 <div class="container"> 
<div class="p-3 mb-2 bg-dark text-light">
<div class="row">
        <div class="col"></div>
        <div class="col-10">
                          
   <!-- Begin Image Slides -->                        
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/hamburg.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/shell.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/town.jpg" alt="Third slide">
    </div>
  </div>
     <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
        </div>
    <div class="col"></div>
</div>
</div>
            </div>
<!-- End Image Slides -->          
            

<div class="container">
<div class="row"></div>
    <div class="row">
        <div class="col"></div>
        <div class="col-xs-10 col-ms-8 col-md-8 col-lg-6">
        <p>
            Welcome to Cooper Fellowship, a modern rehabilitation program that understands addiction. It's a simple,
            yet powerful, path to sobriety that blends clean living and educational tools to give people new outlooks and opportunities.
        </p>
        </div>
        <div class="col"></div>
    </div>
</div>
    
    <?php echo "hello"; ?> 
        
</div><!-- End Page -->    
        
<div class="container-fluid bg-white">
<!--Footer-->
<footer class="page-footer font-small blue pt-4 mt-4">

    <!--Footer Links-->
    <div class="container-fluid text-center text-md-center">
        <div class="row">

            <!--First column-->
            <div class="col-md-6">
                <h5 class="text-uppercase">COOPER FELLOWSHIP</h5>
                <p>Here you can use rows and columns here to organize your footer content.</p>
            </div>
            <!--/.First column-->

            <!--Second column-->
            <div class="col-md-6">
                <h5 class="text-uppercase">Links</h5>
                <ul class="list-unstyled">
                    <li>
                        409 North Cooper Street
                    </li>
                    <li>
                        Santa Ana, CA
                    </li>
                    <li>
                        (714) 554-1152
                    </li>
                </ul>
            </div>
            <!--/.Second column-->
        </div>
    </div>
    <!--/.Footer Links-->

    <!--Copyright-->
    <div class="footer-copyright py-3 text-center">
        © 2018 Copyright:
        <a href="https://mdbootstrap.com/material-design-for-bootstrap/"> Cooper Fellowship </a>
    </div>
    <!--/.Copyright-->

    </footer></div>
<!-- End Footer -->
        
                      
        
<script type="text/javascript">
  $(document).ready(function(){
    //$('.nav').affix({offset: {top: 100} });
    $('.carousel').carousel({
      interval: 3000
    });
    $('.carousel-control.left').click(function() {
    $('#myCarousel').carousel('prev');
    });

    $('.carousel-control.right').click(function() {
    $('#myCarousel').carousel('next');
    });
      

  });    
</script>
        
    </body>
</html>
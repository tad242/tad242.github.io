<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>COOPER FELLOWSHIP</title>
        <meta name="description" content="A guide to sobriety at Cooper Fellowship.">
        <meta name="keywords" content="sober living,recovery,alcoholism,addiction,orange county, 12 steps">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        
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
        
        
<div class="p-3 mb-2 text-light">
    

  
            
   <!-- Begin Page -->
<?php
    include 'header.php';
?>
    
<div class="container"> 
<div class="p-3 mb-2 text-light">
<div class="row">
                          
   <!-- Begin Image Slides -->                        
<div id="myCarousel" class="carousel slide mx-auto" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/dand.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/yoga.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/court.jpg" alt="Third slide">
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
</div>
</div>
            </div>
<!-- End Image Slides -->          
            

<div class="container">
<div class="row"></div>
    <div class="row">
        <div class="col-xs-10 col-sm-8 col-md-8 col-lg-6 mx-auto">
        <p>
            Welcome to Cooper Fellowship, a modern rehabilitation program that understands addiction. It's a simple,
            yet powerful, path to sobriety that blends clean living and educational tools to give people new opportunities.
        </p>
        </div>
    </div>
</div>

<?php
    include 'footer.php';
?>       
        
        <!-- End Page -->    
        
<script type="text/javascript">
  $(document).ready(function(){
  //  $('#navCont').affix({offset: {top: 130} });  
    $('.carousel').carousel({
      interval: 3000
    });
    $('.carousel-control.left').click(function() {
    $('#myCarousel').carousel('prev');
    });

    $('.carousel-control.right').click(function() {
    $('#myCarousel').carousel('next');
    });
      
    $(function () {
    $('[data-toggle="tooltip"]').tooltip()
    })
      

  });    
</script>
        
    </body>
</html>
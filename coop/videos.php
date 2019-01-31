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
        <script src="https://platform.twitter.com/widgets.js"></script>

        <link rel="stylesheet" href="styles/bootstrap.min.css" media=screen>
        <link rel="stylesheet" href="styles/main.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>


    </head>
    <body>
        
<?php
    include 'header.php';
?>
        
   <!-- Begin Page -->
<div class="container">
    <div class="row">
    <div class="container col-5 mx-auto">   
        <div class="row">
    <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/2E6vZt_DC5I" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>
        </div>
    <div class="row" style="margin-top:50px">
    <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/pE51o0izGFQ" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>
    </div>
    </div>
    <div class="ccontainer col-6 mx-auto">
        <a class="twitter-timeline"
           href="https://twitter.com/ArcRecovery/lists/addiction?ref_src=twsrc%5Etfw">A Twitter List by ArcRecovery</a>
    </div>
    </div>


        
</div><!-- End Page -->    
        
<?php
    include 'footer.php';
?>
 
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
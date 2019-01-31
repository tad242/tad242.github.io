<!DOCTYPE html>
<div class="container-fluid" style="background-color:transparent;color:#fff;height:120px;">
 <div class="row">
    <div class="col"></div>
    <div class="col-12">
        <h1>Cooper Fellowship</h1>
    </div>
    <div class="col"></div>
 </div>   
 <div class="row">
    <div class="col"></div>
    <div class="position-relative col-6">
        <h4>A sober living community</h4>
    </div>
    <div class="col"></div>
 </div>
</div>

<div class="nav-container sticky-top" id="navCont">
<nav class="navbar navbar-expand-sm navbar-dark">
  <a class="navbar-brand mx-auto col-12 col-sm-3">Cooper<br> Fellowship</a>
  <button class="navbar-toggler col-12" type="button" data-toggle="collapse" data-target="#navMenu" aria-controls="navMenu" aria-expanded="false" aria-label="Toggle navigation" style="margin-top: 15px;">
    <span class="navbar-toggler-icon"></span>
      </button>


  <div class="collapse navbar-collapse col-xs-10 text-center" id="navMenu">
    <ul class="navbar-nav mx-auto">
    <div class="row">
    <div class="col-sm-5">
     <div class="row">
         
         <?php
            if($_SERVER['PHP_SELF'] == "index.php"){ echo 'HOWDY-HO'; }
            else echo $_SERVER['PHP_SELF'];
         ?>
         
      <li class="nav-item col-12 col-xs-3 col-lg-3">
          <a class="nav-link active" href="index.php">Home</a>
      </li>
      <li class="nav-item col-12 col-xs-3 col-lg-3">
        <a class="nav-link" href="#">Recovery</a>
      </li>
      <li class="nav-item col-12 col-xs-3 col-lg-3">
        <a class="nav-link" href="#">Resources</a>
      </li>
      <li class="nav-item col-12 col-xs-3 col-lg-2">
        <a class="nav-link" href="aa.php">Alcoholics Anonymous</a>
      </li>
    </div></div>
    <div class="col-sm-5">
     <div class="row">        
      <li class="nav-item col-12 col-xs-3 col-lg-3">
        <a class="nav-link" href="#">Narcotics Anonymous</a>
      </li>
      <li class="nav-item col-12 col-xs-3 col-lg-3">
        <a class="nav-link" href="#">Important Links</a>
      </li>
      <li class="nav-item col-12 col-xs-3 col-lg-3">
        <a class="nav-link" href="#">Helpful Videos</a>
      </li>        
      <li class="nav-item col-12 col-xs-3 col-lg-2" data-toggle="tooltip" data-placement="bottom" title="(714) 554-1152">
        <a class="nav-link" href="contact.php">Contact</a>
      </li>
     </div></div></div>
    </ul>
  </div>
</nav>
</div>
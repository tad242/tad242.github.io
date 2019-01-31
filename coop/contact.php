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
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>

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

    <!--Section: Contact v.2-->
<div class="container">
<section class="mb-4">

    <!--Section heading-->
    <h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
    <!--Section description-->
    <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly.</p>

    <div class="row">

        <!--Grid column-->
        <div class="col-md-9 mb-md-0 mb-5">
            <form id="contact-form" name="contact-form" action="contact.php" method="POST">

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="text" id="name" name="name" class="form-control">
                            <label for="name" class="">Your name</label>
                        </div>
                    </div>


                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="text" id="email" name="email" class="form-control">
                            <label for="email" class="">Your email</label>
                        </div>
                    </div>


                </div>

                <!--Grid row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form mb-0">
                            <input type="text" id="subject" name="subject" class="form-control">
                            <label for="subject" class="">Subject</label>
                        </div>
                    </div>
                </div>


                <div class="row">


                    <div class="col-md-12">

                        <div class="md-form">
                            <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                            <label for="message">Your message</label>
                        </div>

                    </div>
                </div>

           <div class="status">
               <div class="g-recaptcha" data-sitekey="6LfmdY0UAAAAAGVm6yCPUuhajGdWWOidwzRKnSJo"></div>
                <?php
                    $response = $_POST["g-recaptcha-response"];
                    $url = 'https://www.google.com/recaptcha/api/siteverify';
                    $data = array(
                        'secret' => '6LfmdY0UAAAAALBshWvluDd-SNZx4-P1YHZEs0d4',
                        'response' => $_POST["g-recaptcha-response"]
                    );
                    $options = array(
                        'http' => array (
                            'method' => 'POST',
                            'content' => http_build_query($data)
                        )
                    );
                    $context  = stream_context_create($options);
                    $verify = file_get_contents($url, false, $context);
                    $captcha_success=json_decode($verify);
                    if ($captcha_success->success==false) {
                        echo "<p>Please verify that you are human.</p>";
                    } else if ($captcha_success->success==true) {
                        echo "<p>Success!</p>";
                        
                        $name = $_POST['name'];
                        $visitor_email = $_POST['email'];
                        $message = $_POST['message'];

                        $email_from = $visitor_email;
                        $email_subject = "New Email from $name";
                        $email_body = "You have received a new message from the user $name.\n
                                        Here is the message:\n $message";

                        $to = "brokenyard@gmail.com";
                        $headers = "From: $email_from \r\n";
                        $headers .= "Reply-To: $visitor_email \r\n";

                        ini_set(mail($to,$email_subject,$email_body,$headers),1);

                    }
                ?>

               
            </div>
            <div class="text-center text-md-left">
                <input type="submit" name="submit" value="Send">
            </div>
                
                
            </form>


        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-3 text-center">
            <ul class="list-unstyled mb-0">
                <li><i class="fa fa-map-marker fa-2x"></i>
                    <p>Santa Ana, CA, 92703</p>
                </li>

                <li><i class="fa fa-phone mt-4 fa-2x"></i>
                    <p>+ 01 714 554 1152</p>
                </li>
            </ul>
        </div>
        <!--Grid column-->

    </div>

    </section></div>
<!--Section: Contact v.2-->
    
    
    <!-- End Page -->    
        
<?php
    include 'footer.php';
?>
        
    </body>
</html>
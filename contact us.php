<?php

$result="";

if(isset($_POST['submit'])){
    require 'php mailer/PHPMailerAutoload.php';
    $mail = new PHPMailer;
    
    $mail->Host='smtp.gmail.com';
    $mail->Port=587;
    $mail->SMTPAuth=true;
    $mail->SMTPSecure='tls';
    $mail->Username='akshaysolanki17.1995@gmail.com';
    $mail->Password='mrakshsolanki';

    $mail->setFrom($_POST['email'],$_POST['name']);
    $mail->addAddress('yashservices.jam@gmail.com');
    $mail->addReplyTo($_POST['email'],$_POST['name']);

    $mail->isHTML(true);
    $mail->Subject='Form Submission: '.$_POST['subject'];
    $mail->Body='<h1 align=center>Name :'.$_POST['name'].'<br>Email: '.$_POST['email'].'<br>Message :'.$_POST['message'].'</h1>';

    if(!$mail->send()){
    $result="Something Went Wrong. Please Try Again.";
    }
   else
   {
    $result="Thanks ".$_POST['name']."for contacting us. We'll get back to soon!";

}
}

?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
     <head>
        <meta charset="utf-8">
        <title>Yash Group</title>
        <!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <!-- Custom Fonts -->
        <link rel="stylesheet" href="custom-font/fonts.css" />
        <!-- Bootstrap -->
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <!-- Font Awesome -->
        <link rel="stylesheet" href="css/font-awesome.min.css" />
<link rel="stylesheet" href="css/animate.min.css">
        <!-- Bootsnav -->
        <link rel="stylesheet" href="css/bootsnav.css">
        <!-- Fancybox -->
       
        <!-- Custom stylesheet -->
		<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
        <link rel="stylesheet" href="css/custom.css" />
       			<link rel="stylesheet" href="css/flexslider.css">
        <!--[if lt IE 9]>
                <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
		<script src="js/script.js"></script>
		    <script src="js/akshay.js"></script>
		   
    </head>
   
	<body>

        <!-- Preloader -->

       
       

        <!--End off Preloader -->

        <!-- Header -->
         <header>
            <!-- Top Navbar -->
            <div class="top_nav">
                <div class="container">
                    <ul class="list-inline info">
                        <li class="wow zoomIn data-wow-delay"="0.4s" data-wow-delay="0.5s""><a href="#"><span class="fa fa-phone "></span> 8460 12 1995 | 9824 54 3442</a></li>
                        <li class="wow zoomIn data-wow-delay"="0.4s" data-wow-delay="0.8s""><a href="#"><span class="fa fa-envelope"></span> yashservices.jam@gmail.com</a></li>
                        <li class="wow zoomIn data-wow-delay"="0.4s" data-wow-delay="1s""><a href="#"><span class="fa fa-clock-o"></span> Mon - Sat 9:00 - 20:00</a></li>
                    </ul>
                      </div>
            </div><!-- Top Navbar end -->

            <!-- Navbar -->
            <nav class="navbar bootsnav">
                <!-- Top Search -->
                <div class="top-search">
                    <div class="container">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-search"></i></span>
                            <input type="text" class="form-control" placeholder="Search">
                            <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <!-- Atribute Navigation -->
                    <!-- Header Navigation -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                            <i class="fa fa-bars"></i>
                        </button>
                        <a href="index.html"class="navbar-brand wow bounceInLeft data-wow-delay"="0.4s" data-wow-delay="0.5s" href=""><img class="logo" src="images/200 px.png" alt=""></a>
                    </div>
                    <!-- Navigation -->
                    <div class="collapse navbar-collapse" id="navbar-menu">
                        <ul class="nav navbar-nav menu">
                            <li class="wow bounceIn data-wow-delay"="0.4s" data-wow-delay="0.5s""><a href="index.html">Home</a></li>                    
                            <li class="wow bounceIn data-wow-delay"="0.4s" data-wow-delay="1s""><a href="about us.html">About Us</a></li>
                            <li class="wow bounceIn data-wow-delay"="0.4s" data-wow-delay="1.4s""><a href="services.html">Services</a></li>
                            <li class="wow bounceIn data-wow-delay"="0.4s" data-wow-delay="1.8s""><a href="contact us.html">Contact Us</a></li>
                        </ul>
                    </div>
                </div>   
            </nav><!-- Navbar end -->
        </header><!-- Header end -->


       <!-- Header end -->
<section class="page-title" style="background-image:url(images/19742.jpg);">
	<div class="row">
    	<div class="auto-container">
               <div class="content-box">
            	<h1>Contact Us</h1>
            </div>
        </div>
        <br>
   <div class="btn-group btn-breadcrumb">
            <a href="#" class="btn btn-default"><i class="glyphicon glyphicon-home"></i></a>
            <a href="#" class="btn btn-default">Yash Group</a>
            <a href="#" class="btn btn-default">Contact Us</a>
            
        </div>


    
    </div>
    </section>
       <br>       


  <div class="container">     
  <div class="row">
    <div class="col-sm-12" id="parent">
    	<div class="col-md-6">
    	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3687.1775748208834!2d70.06820711443207!3d22.459960342756965!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39576ac11d558f67%3A0x4882d1a35cf68bbc!2schaitanya+complex!5e0!3m2!1sen!2sin!4v1562397474473!5m2!1sen!2sin" width="100%" height="320" frameborder="0" style="border:0" allowfullscreen></iframe>
    	
    	</div>

    	<div class="col-md-6">
            <h5 class="text-center" text-success"><?= $result; ?></h5>
    		<form action="" method="post" id="form-box" class="p-2">
	
		        <div class="form-group">
		          <input type="text" class="form-control" id="name" name="name" placeholder="Name" required="" autofocus="">
		        </div>
		    
		    
		        <div class="form-group form_left">
		          <input type="email" class="form-control" id="email" name="email" placeholder="Email" required="">
		        </div>
		    
               <div class="form-group form_left">
                  <input type="text" class="form-control" id="subjecy" name="subject" placeholder="Subject" required="">
                </div>
            
		      <div class="form-group">
		      <textarea class="form-control textarea-contact" rows="5" id="comment" name="message" placeholder="Message" required=""></textarea>
		      <br>
          </div>
             <div class="form-group">
	      	  <input type="submit" name="submit" class="btn btn-primary btn-block" value="send">
		      </div>
          </form>
    	</div>
    </div>
  </div>

 
</div><br>
 <section id="footer">
            <!-- Footer top -->
            <div class="container footer_top">
                <div class="row">
                    <div class="col-md-6 wow zoomIn" data-wow-delay="0.4s"">
                        <div class="footer_item ">
                            <h4>About Company</h4>
                            <img class="logo" src="images/200 px.png" alt="Construction"  />
                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem</p>

                             </div>
                    </div>
                    <div class="col-md-6 wow zoomIn" data-wow-delay="0.4s"">
                        <div class="footer_item">
                            <h4>Contact us</h4>
                            <ul class="list-unstyled footer_contact">
                                <li><span class="fa fa-map-marker"></span><p>308,Chaitanya Complex.Nr.Khambhalia Gate Opp.Arya Samaj School,Jamnagar-361005.</p></li>
                                <li><span class="fa fa-envelope"></span>yashservices.jam@gmail.com</li>
                                <li><span class="fa fa-mobile"></span><p>8460 12 1995 <br />9824 54 3442</p></li>
                            </ul>
							
                        </div>
                    </div>
                </div>
            </div>
        </section>
            			
			
        <!-- JavaScript -->
        <script src="js/jquery-1.12.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>

        <!-- Bootsnav js -->
        <script src="js/bootsnav.js"></script>

        <!-- JS Implementing Plugins -->
        <script src="js/isotope.js"></script>
        <script src="js/isotope-active.js"></script>
        

        <script src="js/jquery.scrollUp.min.js"></script>

        <script src="js/main.js"></script>
		<script src="js/wow.min.js"></script>
		<script>
        new WOW().init();
        </script>
   

    </body>	
</html>
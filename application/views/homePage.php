<?php
defined('BASEPATH') OR exit('No direct script access allowed');
                $this->load->library('session');
?>

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <meta name="theme-color" content="#2196F3">
    <title>Dr. Diet Expert</title>

	<!-- CSS  -->
    <link href="<?php echo base_url(); ?>css/min/plugin-min.css" type="text/css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/min/custom-min.css" type="text/css" rel="stylesheet" >
	
    <!-- CSS  -->
    <link href="../min/plugin-min.css" type="text/css" rel="stylesheet">
    <link href="../min/custom-min.css" type="text/css" rel="stylesheet" >
</head>
<body id="top" class="scrollspy">

<!-- Pre Loader -->
<div id="loader-wrapper">
    <div id="loader"></div>
 
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
 
</div>

<!--Navigation-->
 <div class="navbar-fixed">
    <nav id="nav_f" class="default_color" role="navigation">
        <div class="container">
            <div class="nav-wrapper">
            <a href="#" id="logo-container" class="brand-logo">Dr. Diet Expert</a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="<?php echo site_url("welcome/showHome"); ?>">Home</a></li>
                    <?php if($this->session->userdata('user_id')!= NULL){  ?>
                        <li><a href="<?php echo site_url("welcome/showProfile"); ?>">Profile</a></li>
                    <?php } ?>      
                    <li><a href="">Team</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <?php if($this->session->userdata('user_id')!= NULL){  ?>
                        <li><a href="<?php echo site_url("welcome/Logout"); ?>"><span>Logout</span></a></li>
                    <?php } else  {?>    
                        <li><a href="<?php echo site_url("welcome/showLogin"); ?>"><span>Login/Register</span></a></li>

                    <?php } ?>
                </ul>
                <ul id="nav-mobile" class="side-nav">
                    <li><a href="<?php echo site_url("welcome/showHome"); ?>">Home</a></li>
                    <li><a href="fruits.html">Register</a></li>
                    <li><a href="">Team</a></li>
                    <li><a href="#contact">Contact</a></li>
					<li><span> Login </span></li>
                </ul>
            <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
            </div>
        </div>
    </nav>
</div>

<!--Hero-->
<div class="section no-pad-bot" id="index-banner">
    <div class="container">
        <h1 class="text_h center header cd-headline letters type">
            <span>I Love</span> 
            <span class="cd-words-wrapper waiting">
                <b class="is-visible">My Health</b>
				<b>to Stay Fit</b>
                <b>to use Diet Expert</b>
            </span>
        </h1>
    </div>
</div>

<!--Intro and service-->
<div id="intro" class="section scrollspy">
    <div class="container">
        <div class="row">
            <div  class="col s12">
                <h4 class="center header text_h4"> 
				<p> Put your diet on autopilot
Dr. diet expert automatically creates meal plans that meet your diet goals.
It can be personalized for your food preferences, budget, and schedule.
Then, once a week, we give you a grocery list with everything you need.
Eating smart has never been this easy.</p> </h4>
            </div>

            <div  class="col s12 m4 l4">
                <div class="center promo promo-example">
        <div class="row">
        <div class="col s12 m7">
          <div class="card">
            <div class="card-image">
              <img src="<?php echo base_url(); ?>css/img/image1.jpg">
            </div>
            <div class="card-content">
              <p>This great tasting drink will keep you feeling full until lunchtime & is very healthy.</p>
            </div>
            <div class="card-action">
              <a href="#">This is a link</a>
            </div>
          </div>
        </div>
      </div>
            
                </div>
            </div>
            <div class="col s12 m4 l4">
                <div class="center promo promo-example">
                     <div class="row">
        <div class="col s12 m7">
          <div class="card">
            <div class="card-image">
              <img src="<?php echo base_url(); ?>css/img/image2.jpg">
            </div>
            <div class="card-content">
              <p>This muesli can be used as a base to add any seeds or fruits you like for a big boost of vitamins & minerals.</p>
            </div>
            <div class="card-action">
              <a href="#">This is a link</a>
            </div>
          </div>
        </div>
      </div>
                </div>
            </div>
            <div class="col s12 m4 l4">
                <div class="center promo promo-example">
                   <div class="row">
        <div class="col s12 m7">
          <div class="card">
            <div class="card-image">
              <img src="<?php echo base_url(); ?>css/img/image3.jpg">
            </div>
            <div class="card-content">
              <p>This is fancier than a tub of yogurt, but is as convenient, healthier & more filling.</p>
            </div>
            <div class="card-action">
              <a href="#">This is a link</a>
            </div>
          </div>
        </div>
      </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--Work-->
<div class="section scrollspy">
    <div class="container">
        <h2 class="header text_b">Nutrients Source</h2>
        <div class="row">
            <div class="col s12 m4 l4">
                <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="<?php echo base_url(); ?>css/img/project1.jpg">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Apple <i class="mdi-navigation-more-vert right"></i></span>
                        <p><a href="#">more link</a></p>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Apple <i class="mdi-navigation-close right"></i></span>
                        <p>Here is some more information about this Fruit.</p>
                    </div>
                </div>
            </div>
            <div class="col s12 m4 l4">
                <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="<?php echo base_url(); ?>css/img/project2.jpg">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Fruit 2 <i class="mdi-navigation-more-vert right"></i></span>
                        <p><a href="#">more link</a></p>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Fruit 2 <i class="mdi-navigation-close right"></i></span>
                        <p>Here is some more information about this fruit.</p>
                    </div>
                </div>
            </div>
            <div class="col s12 m4 l4">
                <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="<?php echo base_url(); ?>css/img/project7.jpg">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Fruit 3 <i class="mdi-navigation-more-vert right"></i></span>
                        <p><a href="#">more link</a></p>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Fruit 3 <i class="mdi-navigation-close right"></i></span>
                        <p>Here is some more information about this fruit.</p>
                    </div>
                </div>
            </div>
            <div class="col s12 m4 l4" style="float:right">
                <div>
                    <span> <a href="fruits.html"><Button>View All of them...</Button></a></span>
                </div>
            </div>
        </div>
    </div>
</div>

<!--Parallax-->
<div class="parallax-container">
    <div class="parallax">	
		<img src="<?php echo base_url(); ?>css/img/parallax1.jpg">
		
	</div>
</div>

<!--Team-->
<div class="section scrollspy" id="team">
    <div class="container">
        <h2 class="header text_b"> Our Team </h2>
        <div class="row">
            <div class="col s12 m2">
                <div class="card card-avatar">
                    <div class="waves-effect waves-block waves-light">
                        <img class="activator" src="<?php echo base_url(); ?>css/img/avatar6.png">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Omkar Prabhu Gaonkar 1324<br/>
                            <small><em><a class="red-text text-darken-1" href="#">Developer</a></em></small></span>
                        <p>
                            <a class="blue-text text-lighten-2" href="">
                                <i class="fa fa-facebook-square"></i>
                            </a>
                            <a class="blue-text text-lighten-2" href="">
                                <i class="fa fa-twitter-square"></i>
                            </a>
                            <a class="blue-text text-lighten-2" href="">
                                <i class="fa fa-google-plus-square"></i>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col s12 m2">
                <div class="card card-avatar">
                    <div class="waves-effect waves-block waves-light">
                        <img class="activator" src="<?php echo base_url(); ?>css/img/avatar1.png">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Keshav  Kelkar 1310<br/>
                            <small><em><a class="red-text text-darken-1" href="#">Developer</a></em></small>
                        </span>
                        <p>
                            <a class="blue-text text-lighten-2" href="">
                                <i class="fa fa-facebook-square"></i>
                            </a>
                            <a class="blue-text text-lighten-2" href="">
                                <i class="fa fa-twitter-square"></i>
                            </a>
                            <a class="blue-text text-lighten-2" href="">
                                <i class="fa fa-google-plus-square"></i>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col s12 m2">
                <div class="card card-avatar">
                    <div class="waves-effect waves-block waves-light">
                        <img class="activator" src="<?php echo base_url(); ?>css/img/avatar5.png">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Priyanka Bhagat 1362<br/>
                            <small><em><a class="red-text text-darken-1" href="#">Developer</a></em></small></span>
                        <p>
                            <a class="blue-text text-lighten-2" href="">
                                <i class="fa fa-facebook-square"></i>
                            </a>
                            <a class="blue-text text-lighten-2" href="">
                                <i class="fa fa-twitter-square"></i>
                            </a>
                            <a class="blue-text text-lighten-2" href="">
                                <i class="fa fa-google-plus-square"></i>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col s12 m2">
                <div class="card card-avatar">
                    <div class="waves-effect waves-block waves-light">
                        <img class="activator" src="<?php echo base_url(); ?>css/img/avatar2.png">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Tanvi Redkar 1346<br/>
                            <small><em><a class="red-text text-darken-1" href="#">Developer</a></em></small></span>
                        <p>
                            <a class="blue-text text-lighten-2" href="">
                                <i class="fa fa-facebook-square"></i>
                            </a>
                            <a class="blue-text text-lighten-2" href="">
                                <i class="fa fa-twitter-square"></i>
                            </a>
                            <a class="blue-text text-lighten-2" href="">
                                <i class="fa fa-google-plus-square"></i>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
			<div class="col s12 m2">
                <div class="card card-avatar">
                    <div class="waves-effect waves-block waves-light">
                        <img class="activator" src="<?php echo base_url(); ?>css/img/avatar4.png">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Avesh Naik 1328<br/>
                            <small><em><a class="red-text text-darken-1" href="#">Developer</a></em></small></span>
                        <p>
                            <a class="blue-text text-lighten-2" href="">
                                <i class="fa fa-facebook-square"></i>
                            </a>
                            <a class="blue-text text-lighten-2" href="">
                                <i class="fa fa-twitter-square"></i>
                            </a>
                            <a class="blue-text text-lighten-2" href="">
                                <i class="fa fa-google-plus-square"></i>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col s12 m2">
                <div class="card card-avatar">
                    <div class="waves-effect waves-block waves-light">
                        <img class="activator" src="<?php echo base_url(); ?>css/img/avatar3.png">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Prajact  Sawant 1326<br/>
                            <small><em><a class="red-text text-darken-1" href="#">Developer</a></em></small>
                        </span>
                        <p>
                            <a class="blue-text text-lighten-2" href="">
                                <i class="fa fa-facebook-square"></i>
                            </a>
                            <a class="blue-text text-lighten-2" href="">
                                <i class="fa fa-twitter-square"></i>
                            </a>
                            <a class="blue-text text-lighten-2" href="">
                                <i class="fa fa-google-plus-square"></i>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>

<!--Footer-->
<footer id="contact" class="page-footer default_color scrollspy">
    <div class="container">  
        <div class="row">
            <div class="col l6 s12">
                <form class="col s12" action="contact.php" method="post">
                    <div class="row">
                        <div class="input-field col s6">
                            <i class="mdi-action-account-circle prefix white-text"></i>
                            <input id="icon_prefix" name="name" type="text" class="validate white-text">
                            <label for="icon_prefix" class="white-text">First Name</label>
                        </div>
                        <div class="input-field col s6">
                            <i class="mdi-communication-email prefix white-text"></i>
                            <input id="icon_email" name="email" type="email" class="validate white-text">
                            <label for="icon_email" class="white-text">Email-id</label>
                        </div>
                        <div class="input-field col s12">
                            <i class="mdi-editor-mode-edit prefix white-text"></i>
                            <textarea id="icon_prefix2" name="message" class="materialize-textarea white-text"></textarea>
                            <label for="icon_prefix2" class="white-text">Message</label>
                        </div>
                        <div class="col offset-s7 s5">
                            <button class="btn waves-effect waves-light red darken-1" type="submit">Submit
                                <i class="mdi-content-send right white-text"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col l3 s12">
                <h5 class="white-text">Happy To Help</h5>
                <ul>
                    <li><a class="white-text" href="">Home</a></li>
                    <li><a class="white-text" href="">Blog</a></li>
                </ul>
            </div>
            <div class="col l3 s12">
                <h5 class="white-text">Social</h5>
                <ul>
                    <li>
                        <a class="white-text" href="https://www.facebook.com/prajact.sawant">
                            <i class="small fa fa-facebook-square white-text"></i> Facebook
                        </a>
                    </li>
                    <li>
                        <a class="white-text" href="https://github.com/prajact">
                            <i class="small fa fa-github-square white-text"></i> Github
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright default_color">
        <div class="container">
            Made by <a class="white-text" href="">Prajact & Team</a>. Thanks to <a class="white-text" href="http://materializecss.com/">materializecss</a>
        </div>
    </div>
</footer>

<!--  Scripts-->
    <script src="<?php echo base_url(); ?>css/min/plugin-min.js"></script>
    <script src="<?php echo base_url(); ?>css/min/custom-min.js"></script>


    </body>
</html>

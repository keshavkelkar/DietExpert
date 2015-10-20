<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

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
                    <li><a href="home.html">Home</a></li>
                    <li><a href="fruits.html">Register</a></li>
                    <li><a href="">Team</a></li>
                    <li><a href="#contact">Contact</a></li>
					<li><a href="<?php echo site_url("welcome/showLogin"); ?>"><span>Login</span></a></li>
                </ul>
                <ul id="nav-mobile" class="side-nav">
                    <li><a href="home.html">Home</a></li>
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
                <h2 class="center header text_h2"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
				<span class="span_h2"> Phasellus  </span>vestibulum lorem risus, nec suscipit lorem 
				<span class="span_h2"> laoreet quis.</span> </h2>
            </div>

            <div  class="col s12 m4 l4">
                <div class="center promo promo-example">
                    <i class="mdi-image-flash-on"></i>
                    <h5 class="promo-caption">Speeds up development</h5>
                    <p class="light center">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Cum sociis natoque penatibus et magnis dis parturient montes.</p>
                </div>
            </div>
            <div class="col s12 m4 l4">
                <div class="center promo promo-example">
                    <i class="mdi-social-group"></i>
                    <h5 class="promo-caption">User Experience Focused</h5>
                    <p class="light center">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                </div>
            </div>
            <div class="col s12 m4 l4">
                <div class="center promo promo-example">
                    <i class="mdi-hardware-desktop-windows"></i>
                    <h5 class="promo-caption">Fully responsive</h5>
                    <p class="light center">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
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
                        <img class="activator" src="<?php echo base_url(); ?>css/img/project1.jpg">
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
                        <img class="activator" src="<?php echo base_url(); ?>css/img/project1.jpg">
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
					<span> slider of 5 fruits </span>
                    <span> <a href="fruits.html"><Button>View All of them...</Button></a></span>
                </div>
            </div>
        </div>
    </div>
</div>

<!--Parallax-->
<div class="parallax-container">
    <div class="parallax">	
		<img src="<?php echo base_url(); ?>css/img/img/parallax1.jpg">
		
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
                        <img class="activator" src="<?php echo base_url(); ?>css/img/img/avatar1.png">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Omkar <br/>
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
                        <img class="activator" src="<?php echo base_url(); ?>css/img/img/avatar4.png">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Keshav<br/>
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
                        <img class="activator" src="<?php echo base_url(); ?>css/img//img/avatar2.png">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Priyanka<br/>
                            <small><em><a class="red-text text-darken-1" href="#">developer</a></em></small></span>
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
                        <img class="activator" src="<?php echo base_url(); ?>css/img/img/avatar2.png">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Tanvi<br/>
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
                        <span class="card-title activator grey-text text-darken-4">Avesh <br/>
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
                        <span class="card-title activator grey-text text-darken-4">Prajact<br/>
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
                        <a class="white-text" href="https://www.facebook.com/joash.c.pereira">
                            <i class="small fa fa-facebook-square white-text"></i> Facebook
                        </a>
                    </li>
                    <li>
                        <a class="white-text" href="https://github.com/joashp">
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

 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> St.Joseph Convent Hr.Sec.School - Burdwan -Welcomes You!</title>

</head>
<body>
	<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/custom-style.css">
 <link type="text/css" href="css/menu.css" rel="stylesheet" />


	<header class="wrapper">
    	<div class="pull-left">
       		<a href="index.php" class="bg-logo"><img src="images/logo.png"/></a>
        </div>
        <div class="clearfix">&nbsp;</div>
        <div class="bg-nav">
        
        	<div id="menu">

             <ul class="menu">
                <li><a href="index.php"><span>HOME</span></a></li>
                                <li><?php session_start();
				if(isset($_SESSION['aid'])||isset($_SESSION['pwd'])) echo '<a href="logout.php"><span>LOGOUT</span></a>'; else echo'<a href="#"><span>LOGIN</span></a>
                <div><ul>
                        <li><a href="studentlogin.php"><span>Student Login</span></a></li>
                        <li><a href="adminlogin.php"><span>Admin Login</span></a></li>
                        </ul></div>';?></li>       
                <li><a href="#"><span>ABOUT US</span></a>
                	<div><ul>
                        <li><a href="history.php"><span>Our History</span></a></li>
                        <li><a href="mission.php"><span>Our Mission</span></a></li>
                        <li><a href="inspiration.php"><span>Our Inspiration</span></a></li>
                        <li><a href="prayer.php"><span>Our Prayer</span></a></li>
                        <li><a href="institution.php"><span>Our Institution</span></a></li>
                        <li><a href="aim.php"><span>Our Aim</span></a></li>
                        <li><a href="teacher.php"><span>Our Teachers</span></a></li>
                        </ul>
                     </div>
                </li>
                <li><a href="message.php"><span>Principal Message</span></a></li>
                <li><a href="#"><span>Our Schools</span></a>
                	<div><ul>
                    	<li><a href="admission.php"><span>Admission</span></a></li>       
                		<li><a href="E-Learning.php"><span>E-Learning</span></a></li>  
                        <li><a href="ten.php"><span>Commandments</span></a></li>
                        <li><a href="curriculum.php"><span>Curriculum</span></a></li>
                        <li><a href="regulation.php"><span>School Regulation</span></a></li>
                        <li><a href="uniform.php"><span>Hours and Uniform</span></a></li>
                        <li><a href="hindi-school.php"><span>Hindi School</span></a></li>
                        
                        </ul>
                     </div>
                     
                </li>       
                <li><a href="#"><span>STUDENTS LIFE</span></a>
                	<div><ul>
                        <li><a href="extra.php"><span>Extra Curricular</span></a></li>
                        <li><a href="leadership.php"><span>Students Leadership</span></a></li>
						<li><a href="uploadoptions.php"><span>Upload Article</span></a></li>
                        <li><a href="articleoptions.php"><span>View Uploaded Articles</span></a></li></ul>
                     </div>
                </li> 
                 
                  <li><a href="gallery.php"><span>GALLERY</span></a></li>
                <li><a href="contactus.php"><span>CONTACT US</span></a></li>
             </ul>   
                
        </div>
         <div style="visibility:hidden">
            <a href="http://apycom.com/">Apycom jQuery Menus</a>
            </div>
    </header>   
     <div class="wrapper">
    		<style type="text/css">
	#slideshow li {
     list-style: outside none none;
    margin-bottom: 200px;
    margin-left: 0;
    position: absolute;
    z-index: -9999;
		}
	</style>
    <div class="bg-slide">
    <div id="slideshow">
        <ul>
          <li><img src="images/slide11.png"/></li>		  <li><img src="images/slide2.png"/></li>		  <li><img src="images/slide3.png"/></li>		  <li><img src="images/slide4.png"/></li>		  <li><img src="images/slide5.png"/></li>		  <li><img src="images/slide6.png"/></li>		  <li><img src="images/slide7.png"/></li>		  <li><img src="images/slide2.png"/></li>
         </ul> 
    </div>
    <div class="clearfix">&nbsp;</div>
    </div>
     <script src="js/jquery.min.js"></script>
	  <script src="js/craftyslide.min.js"></script>
        <script>
         $("#slideshow").craftyslide({
        
          'width': 1000,
        
          'height': 450,
        
          'pagination': false,
        
          'fadetime': 900,
        
          'delay': 4000
        
        });
    
          </script>
         <article>
<br><br><br><br>
            <div class="one-third content">
            	<h1 class="title1">Welcome</h1>
                <img src="images/stjoesph_12.png"/>
                <div class="thumb-shadow">&nbsp;</div>
                <p>
                More than half century has elapsed since the seed was sown in the little town of Chittaranjan and it has grown tremendously from strength                and now stands as a mighty tree in the form of St. Joseph's Convent Higher Secondary School.</p>
                <p>
                The Railway (Chittaranjan Locomotive Works) Administration... 
                <span><a href="history.php" class="li-read">Read More</a></span>
                </p>
            </div>
            <div class="one-third content">
            	<h1 class="title2">Principal's Message</h1>
                <img src="images/stjoesph_14.png"/>
                <div class="thumb-shadow">&nbsp;</div>
                 <p>As we move towards the platinum era, I welcome all of you to the amazing world of Josephites. Thank you for visiting the website of St Joseph's Convent Higher Secondary School, Chittaranjan. We have arrived at our third year of our ongoing mission to re-launch the legacy of St Joseph's, and we greatly appreciate the support from...
                <span><a href="message.php" class="li-read">Read More</a></span>
                </p>
            </div>
            <div class="one-third last content">
            	<h1 class="title3">Photo Gallery</h1>
                <a href="gallery.php" title="SCIENCE OLIMPIAD NATIONAL AWARD" target="_self" rel="lightbox" >
                 		 <img src="images/3.png"   height="146" width="282"/></a>
                                 <div class="thumb-shadow">&nbsp;</div>
                                 <br>
                                  <a href="gallery.php" title="ANNUAL SPORTS DAY" target="_self" rel="lightbox" >
                 		 <img src="images/9.png"   height="146" width="282"/></a>
                                 <div class="thumb-shadow">&nbsp;</div>
                					                            					                                    			                <!--<img src="images/stjoesph_12.png"/>
                <div class="thumb-shadow">&nbsp;</div>
                <img src="images/stjoesph_12.png"/>
                <div class="thumb-shadow">&nbsp;</div>-->
            </div>
            <div class="clearfix">&nbsp;</div>
        </article>
    </div>
    <footer>
    	<div class="wrapper">
        	<div class="one-fourth">
            	<h1>About Us</h1>
                	<ul>
                    	<li><a href="history.php" class="li-footer">Our History</a></li>                     	
                        <li><a href="mission.php" class="li-footer">Our Mission</a></li>                     
                       	<li><a href="inspiration.php" class="li-footer">Our Inspiration</a></li>           
                        <li><a href="prayer.php" class="li-footer">Our Prayer</a></li>                     	
                  </ul>
            </div>
           <div class="one-fourth">
            <h1>Associate With School</h1>
            	<ul>
					   <li><a href="institution.php" class="li-footer">Our Institution</a></li>
                       <li><a href="gallery.php" class="li-footer">Photo Gallery</a></li>
                       <li><a href="teacher.php" class="li-footer">Our Teachers</a></li>
                       <li><a href="contactus.php" class="li-footer">Contact Us</a></li>
                 </ul>
            </div>
            <div class="one-fourth last">
            <h1>&nbsp;</h1>
            <p class="footer-para">
                Copyright<br/>
                St. Joseph Convent Hg. Sec. School<br/>
                All Rights Reserved<br/>
				Powered By
				<a href="http://schoolsindia.com/" target="_blank" class="li-footer" style="color:#FF0000">Schoolsindia</a>
            </p>
            </div>
            <div class="clearfix">&nbsp;</div>
        </div>
    </footer>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/jquery-1.7.1.min.js"><\/script>')</script>
	<!--[if lt IE 9]> <script src="js/selectivizr-and-extra-selectors.min.js"></script> <![endif]-->
	<script src="js/jquery.easing-1.3.min.js"></script>
	<script src="js/jquery.fancybox.pack.js"></script>
	<script src="js/jquery.smartStartSlider.min.js"></script>
	<script src="js/jquery.jcarousel.min.js"></script>
	<script src="js/jquery.cycle.all.min.js"></script>
	<script src="js/jquery.isotope.min.js"></script>
	<script src="js/audioplayerv1.min.js"></script>
	<script src="//maps.google.com/maps/api/js?sensor=false"></script>
	<script src="js/jquery.gmap.min.js"></script>
	<script src="js/custom.js"></script>
   <script type="text/javascript" src="js/menu.js"></script></body>
</html>

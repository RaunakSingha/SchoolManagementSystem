<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Our Curriculum</title>

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
                        <li><a href="articleoptions.php"><span>View Uploaded Articles</span></a></li>
                        
                        </ul>
                     </div>
                </li> 
                 <li><a href="gallery.php"><span>GALLERY</span></a></li>
                
                    
                <li><a href="contactus.php"><span>CONTACT US</span></a></li>
             </ul>   
                
        </div>
         <div style="visibility:hidden">
            <a href="http://apycom.com/">Apycom jQuery Menus</a>
            </div>
    </header>    <div class="wrapper">
        <article class="bg-static-content">
        	<div class="page-header">
            	<h2>Our Curriculum</h2>
                <ul class="point">
                 <li class="li-point">Pupils are prepared for the ICSE Examination (Indian Council for Secondary Education, New Delhi) and ISC (Indian School Certificate).</li>

                <li class="li-point">In addition to the subject prescribed by the Board, and Council syllabus, the curriculum includes Religious Instruction (for Catholics), Moral Science (Non-Catholics), Value Education (for all), G.K. for Classes K.G. I to XII.</li>
                
                <li class="li-point">Apart from these the curriculum may include Handicraft, Chorus singing & other activities.</li>
                
                <li class="li-point">Bengali and Hindi as Second Language is taught from Class K.G. II.</li>
                
                <li class="li-point">E-Learning Digiclass Programme - learning through Audio - Visual Aids is introduced for effective learning.</li>
                </ul>
            </div>
        </article>
    </div>
    <footer>
    	<div class="wrapper">
        	 	        	<div class="one-fourth">
            	<h1>About Us</h1>
                	<ul>
                    	<li><a href="history.php" class="li-footer">Our History</a></li>                     	<li><a href="mission.php" class="li-footer">Our Mission</a></li>                     	<li><a href="inspiration.php" class="li-footer">Our Inspiration</a></li>                     	<li><a href="prayer.php" class="li-footer">Our Prayer</a></li>                     	
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

<?php 
session_start();
if(isset($_SESSION['pwd']))
header("Location:error.php");
?>

<?php 

if(!isset($_SESSION['aid']))
header("Location:adminlogin.php");
?>
<?php
$msg="";

if(isset($_REQUEST['mkadmin']))
{
	$h=mysql_connect("localhost","root","");
	mysql_select_db("stp16"); 
	$name=$_REQUEST['adminnm'];
	
	$pwd=$_REQUEST['password'];
	
	
	
		$qry="insert into admin values('$name','$pwd')";
	mysql_query($qry);
	if(mysql_affected_rows()>0)
		$msg="<b><font color=green>Admin Successfully Added</font></b>";
	else
		$msg="<b><font color=red>Error In Adding Admin</font></b>";
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Our faculties</title>



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
                                               <li><?php 
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
						<li><a href="student_article.php"><span>Students Article</span></a></li>
                        </ul>
                     </div>
                </li> 
                 <li><a href="#"><span>ALUMNI</span></a>
                	<div><ul>
                        <li><a href="become_alumnimember.php"><span>Become Alumni</span></a></li>
                        <li><a href="alumni.php"><span>Alumni Section</span></a></li>
                        </ul>
                     </div>
                </li>        
                    
                <li><a href="contactus.php"><span>CONTACT US</span></a></li>
             </ul>   
                
        </div>
         <div style="visibility:hidden">
            <a href="http://apycom.com/">Apycom jQuery Menus</a>
            </div>
    </header>
 <div class="wrapper">

        <article class="bg-static-content">

        	<div class="margin20">
<div class="clearfix">&nbsp;</div>

<form method="post">
    <h2><center><label><marquee behavior="alternate" >Enter New Admin Name and Password</marquee></label></h2></center>      
    <center><h3>Enter Name Of New Admin:</h3></center>
    <br />
    <center><input type="text" name="adminnm" value="<?php if(isset($_REQUEST['mkadmin']))
{echo $_REQUEST['adminnm'];}?>" placeholder="Enter admin name" /> </center>
    <br />
    <center><h3>Enter password for new admin:</h3></center>
    <br />
    
    <center><input type="password" placeholder="Enter Passowrd" name="password"/>
      <br /><br />
      <input title="Login" type="submit" value="MAKE ADMIN" name="mkadmin" /></center>
      <br />

<?php
if(isset($_REQUEST['mkadmin']))
{ 
echo $msg;
}?>
</form>
<br />
<a href="options.php">Back to Admin Options</a>


          				</div>

        </article>

    </div>






    <footer>
    	<div class="wrapper">
        	<div class="one-fourth">
            	<h1>About Us</h1>
                	<ul>
                    	<li><a href="history.php" class="li-footer">Our History</a></li>                     	<li><a href="mission.php" class="li-footer">Our Mission</a></li>                     	<li><a href="inspiration.php" class="li-footer">Our Inspiration</a></li>                     	<li><a href="prayer.php" class="li-footer">Our Prayer</a></li>                     	<li><a href="institution.php" class="li-footer">Our Institution</a></li>
                  </ul>
            </div>

            <div class="one-fourth">
            <h1>Associate With School</h1>
            	<ul>

                        <li><a href="gallery.php" class="li-footer">Photo Gallery</a></li>
					   <li><a href="alumni.php" class="li-footer">View Alumni Members</a></li>
                       <li><a href="become_alumnimember.php" class="li-footer">Become Alumni Member</a></li>
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
   <script type="text/javascript" src="js/menu.js"></script>
</body>

</html>


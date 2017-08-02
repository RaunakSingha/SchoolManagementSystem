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

if(isset($_REQUEST['register']))
{
	$h=mysql_connect("localhost","root","");
	mysql_select_db("stp16"); 
	$name=$_REQUEST['name'];
	$fname=$_REQUEST['fname'];
	$mname=$_REQUEST['mname'];
	
	$dob=$_REQUEST['dob'];
	$gender=$_REQUEST['gender'];
	$cno=$_REQUEST['cno'];
	$class=$_REQUEST['class'];
	$roll=$_REQUEST['roll'];
	$pwd=$_REQUEST['pwd'];
	$address=$_REQUEST['address'];
	
	
		$qry="insert into students values('$name','$fname','$mname','$dob','$gender','$cno','$class','$roll','$pwd','$address')";
	mysql_query($qry);
	if(mysql_affected_rows()>0)
		$msg="<b><font color=green>Record Successfully Inserted</font></b>";
	else
		$msg="<b><font color=red>Error In Inserting Record</font></b>";
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>New Admission</title>
<script>
function Validate()
{
	
	
	flag=true;
	if(document.getElementById("t1").value=="")
	{document.getElementById("t1").style='border-color:red';
	flag=false;document.getElementById("msg").innerHTML='<font color=red><b>Error in Inserting Record</b></font>';

	}
	else
	document.getElementById("t1").style="";
	
if(document.getElementById("t2").value=="")
	{document.getElementById("t2").style='border-color:red';
	flag=false;document.getElementById("msg").innerHTML='<font color=red><b>Error in Inserting Record</b></font>';

	}
	else
	document.getElementById("t2").style="";

if(document.getElementById("t3").value=="")
	{document.getElementById("t3").style='border-color:red';
	flag=false;document.getElementById("msg").innerHTML='<font color=red><b>Error in Inserting Record</b></font>';

	}
	else
	document.getElementById("t3").style="";

if(document.getElementById("t4").value=="")
	{document.getElementById("t4").style='border-color:red';
	flag=false;
	
document.getElementById("msg").innerHTML='<font color=red><b>Error in Inserting Record</b></font>';
	}
	else
	document.getElementById("t4").style="";

	

if(document.getElementById("t6").value=="")
	{document.getElementById("t6").style='border-color:red';
	flag=false;document.getElementById("msg").innerHTML='<font color=red><b>Error in Inserting Record</b></font>';

	}
	else
	document.getElementById("t6").style="";

if(document.getElementById("t7").selected=="Select Class")
	{document.getElementById("t7").style='border-color:red';
	flag=false;document.getElementById("msg").innerHTML='<font color=red><b>Error in Inserting Record</b></font>';

	}
	else
	document.getElementById("t7").style="";

if(document.getElementById("t8").value=="")
	{document.getElementById("t8").style='border-color:red';
	flag=false;document.getElementById("msg").innerHTML='<font color=red><b>Error in Inserting Record</b></font>';

	}
	else
	document.getElementById("t8").style="";

if(document.getElementById("t9").value=="")
	{document.getElementById("t9").style='border-color:red';
	flag=false;document.getElementById("msg").innerHTML='<font color=red><b>Error in Inserting Record</b></font>';

	}
	else
	document.getElementById("t9").style="";

if(document.getElementById("t10").value=="")
	{document.getElementById("t10").style='border-color:red';
	flag=false;document.getElementById("msg").innerHTML='<font color=red><b>Error in Inserting Record</b></font>';

	}
	else
	document.getElementById("t10").style="";

	
	return flag;
}

</script>


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
    </header>
    <div class="wrapper">

        <article class="bg-static-content">

        	<div class="margin20">

					

						<form action="" method="post" class="other-form" style="max-width:none;" onsubmit="return Validate()">
                        <h1 align="center"> Student Registration form</h1>
<fieldset>
<legend>Enter Details</legend>
<center>
<table width="50%">
<tr>
<td align="center"><label>Student's Name:</label></td>
<td align="center"><input type="text" name="name" value="<?php if(isset($_REQUEST['register']))
{echo $_REQUEST['name'];}?>" id="t1"/></td>
</tr>
<tr>
<td align="center"><label>Father's Name:</label></td>
<td align="center"><input type="text" name="fname" value="<?php if(isset($_REQUEST['register']))
{echo $_REQUEST['fname'];}?>" id="t2"/></td>
</tr>
<tr>
<td align="center"><label>Mother's Name:</label></td>
<td align="center"><input type="text" name="mname" value="<?php if(isset($_REQUEST['register']))
{echo $_REQUEST['mname'];}?>" id="t3"/></td>
</tr>
<tr>
<td align="center"><label>Date Of Birth:</label></td>
<td align="center"><input type="text" name="dob" value="<?php if(isset($_REQUEST['register']))
{echo $_REQUEST['dob'];}?>" id="t4"/></td>
</tr>
<tr>
<td align="center"><label>Gender:</label></td>
<td align="center"><input type="radio" name="gender" value="Male" checked="checked"/>Male

<input type="radio" name="gender" value="Female"/>Female</td>
</tr>
<tr>
<td align="center"><label>Contact No.:</label></td>
<td align="center"><input type="text" name="cno" id="t6" value="<?php if(isset($_REQUEST['register']))
{echo $_REQUEST['cno'];}?>" id="t6"/></td>
</tr>
<tr>
<td align="center"><label>Class:</label></td>
<td align="center"><select name="class" id="t7">
<option <?php if(isset($_REQUEST['register']))
{ if(strcmp(($_REQUEST['class']),'Select Class')==0)
echo 'selected';}?>>Select Class</option>
<option <?php if(isset($_REQUEST['register']))
{ if(($_REQUEST['class'])=='V')
echo 'selected';}?>>V</option>
<option <?php if(isset($_REQUEST['register']))
{ if(($_REQUEST['class'])=='VI')
echo 'selected';}?>>VI</option>
<option <?php if(isset($_REQUEST['register']))
{ if(($_REQUEST['class'])=='VII')
echo 'selected';}?>>VII</option>
<option <?php if(isset($_REQUEST['register']))
{ if(($_REQUEST['class'])=='VIII')
echo 'selected';}?>>VIII</option>
<option <?php if(isset($_REQUEST['register']))
{ if(($_REQUEST['class'])=='IX')
echo 'selected';}?>>IX</option>
<option <?php if(isset($_REQUEST['register']))
{ if(($_REQUEST['class'])=='X')
echo 'selected';}?>>X</option>
</select></td>
</tr>
<tr><td align="center">Roll Number</td><td align="center"><input type="text" name="roll" value="<?php if(isset($_REQUEST['register']))
{echo $_REQUEST['roll'];}?>" id="t8"/></td></tr>
<tr>
<td align="center"><label>Password:</label></td>
<td align="center"><input type="password" id="t9" name="pwd" value=""/></td>
</tr>
<tr>
<td align="center"><label>Address:</label></td>
<td align="center"><textarea rows="5" cols="5" name="address" id="t10"><?php if(isset($_REQUEST['register']))
{echo $_REQUEST['address'];}?></textarea></td>
</tr>

</table>
</center>
</fieldset> 
<center>
<input type="submit" name="register" value="REGISTER" class="submit submit1"/>
</center>
<center><div id="msg" style="font-weight:bold"><?php if(isset($_REQUEST['register']))
{echo $msg;}?></div></center>


  </form><a href="options.php">Back to Admin Options</a>

					</div>

						<div class="clearfix">&nbsp;</div>

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
  
</body>

</html>


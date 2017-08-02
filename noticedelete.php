<?php
$msg="";
 $h=mysql_connect("localhost","root","");
 mysql_select_db("stp16");
 mysql_query("delete from adminarticle where noticename='$_REQUEST[id]'");
  header("location:noticelist.php");
 
?>

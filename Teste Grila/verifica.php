<?php
$AdresaBazaDate = "localhost";
$UtilizatorBazaDate = "root";
$NumeBazaDate = "server";
$conexiune = mysql_connect($AdresaBazaDate,$UtilizatorBazaDate)
or die("Nu ma pot conecta");
mysql_select_db($NumeBazaDate,$conexiune)
or die("Nu gasesc baza de date");


$tbl_name="membrii"; 
$myusername=$_POST['myusername']; 
$mypassword=$_POST['mypassword']; 

$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);
$sql="SELECT * FROM $tbl_name WHERE nume='$myusername' and parola='$mypassword'";
$result=mysql_query($sql);
$count=mysql_num_rows($result);
if($count==1){
session_register("myusername");
session_register("mypassword"); 
header("location:lcs.php");
}
else {
echo "Wrong Username or Password";
}
?>
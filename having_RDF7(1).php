<html>
<head>
<title>Purchased RDF</title>
</head>

<BODY aLink=green background= "1.jpg" vLink=blue>
<hr>
<font size="5"> <div align="center">
Downloading RDF Free trial, first version 2017:
</div></font>
<hr>

<?php

$con=mysqli_connect("localhost","flomenbo_m204050","oPHIR74f","flomenbo_m_RDF204050");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  
// line 29
$x=0;
$result = mysqli_query($con,"SELECT * FROM RDF204050");

while ($row = mysqli_fetch_array($result))
{      
$y1=strlen($_POST["UserName"]);
$y3=strlen($row["software_name"]);
$len=min($y1,$y3);
  if ($_POST["UserName"]==$row["software_name"]) {
     if ($_POST["Password1"]==$row['Password']){
       $x=1;
       echo "inside password";
       break;
     }
     else {
     echo "The Password did not match. <br>We found " . $row['Password'] . " and " . $_POST["Password1"];
     }}
  else{
     echo "The user name was not found. <br> We found " . $_POST["UserName"] . " and " . $row['EmailAddress'];
     }
}


//
if ($x==1){
echo "<br><br> <a href=\"RDF-linux-x64.tar.gz\">RDF UNIX Ubuntu 16 LTS</a>; date: 1,8 of 2017 (214mb zipped, 690mb full)";
echo "<br> Download the file & extract.";
echo "<br> other versions,  and operating system (windows and mcintush) will arrive during the year";


echo "<br><br> <a href=\"RDF_2017_1_windows8_zip\">RDF windows 8</a>; date: 2,5 of 2017 (103mb zipped, 399mb full)";
echo "<br> Download the file & Change the symbol \"_\" for a \".\" and unzip file.";
echo "<br> other windows version  (7 & vista) and operating system (      unix and mcintush) will arrive during the year";
 }
mysql_close($con)

?>

<br><br><br><br>
<hr>

</body>
</html> 
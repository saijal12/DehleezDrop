<?php
$db_host="localhost";
$db_user="root";
$db_pass="";

if($con =mysqli_connect($db_host,$db_user,$db_pass)){
  if($db_sel= mysqli_select_db($con,"food-delivery"));
    // echo "database selected";
 
  else
  echo  "database not selected";
  
}
else
echo  "database not connected";
?>

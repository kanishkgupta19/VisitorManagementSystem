<?php
include "db.php";
$result=$conn->query("Select DISTINCT * from hostdetails");
$str="<option disabled>Select Host</option><option id=0>Guest</option>";
while($output=$result->fetch_assoc())
{
  $hid=$output["HostID"];
  $hname=$output["Name"];
  $str=$str."<option value=$hid>$hname</option>";
}
echo $str;

 ?>

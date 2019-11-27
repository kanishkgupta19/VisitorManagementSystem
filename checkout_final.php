<?php
include "db.php";
include "mailjet.php";
include "sms.php";
$dd=$_GET["work"];
if($dd=="getdata")
{
  $result=$conn->query("Select * from visitordetails where Status='IN'");
  $str="<option disabled>Select Visitor's Name</option>";
  while($out=$result->fetch_assoc())
  {
    $str=$str."<option value='".$out["VisitorID"]."'>".$out["Name"]." :: ".$out["Email"]."</option>";
  }
  echo $str;
}


if($dd=="checkout")
{
  $visitorid=$_POST["vid"];
  //echo "here it is";
  if($conn->query("Select * from visitordetails where VisitorID=$visitorid"))
  {
    $result=$conn->query("Select * from visitordetails where VisitorID=$visitorid");
  }
  else {
    //echo "Query1->".$conn->error;
  }
  $out=$result->fetch_assoc();
  $v_name=$out["Name"];
  $v_email=$out["Email"];
  $v_contact=$out["Contact"];
  $v_checkin=$out["CheckIN"];
  $v_checkout=$out["CheckOUT"];
  $v_host=$out["HostID"];


  if($conn->query("Select * from hostdetails where HostID=$v_host"))
  {
    $result2=$conn->query("Select * from hostdetails where HostID=$v_host");
  }
  else {
    //echo "Query2->".$conn->error;
  }


  $out2=$result2->fetch_assoc();
  $v_hostname=$out2["Name"];
  $v_hostAddress=$out2["Address"];
  $dateOUT=date_create();
  $v_checkout=date_format($dateOUT, "d/m/y h:i:s");
  $dateOUT=date_format($dateOUT, "Y-m-d h:i:s");


  $msg="Hello <b>$v_name</b>, Thank You For Your Visit
  <table><tr><td>Name</td> <td>$v_name</td></tr> <tr><td>Email: </td><td>$v_email</td></tr> <tr><td>Contact:</td><td>$v_contact</td></tr> <tr><td>Check-IN</td><td>$v_checkin</td></tr> <tr><td>CheckOUT:</td><td>$dateOUT</td></tr> <tr><td>Host Name:</td><td>$v_hostname</td></tr> <tr><td>Address:</td><td>$v_hostAddress</td></tr></table>";

  $emailStatus=send_email($msg, $v_email, $v_name, $visitorid);
  if($conn->query("Update visitordetails set Status='OUT' and CheckOUT='$dateOUT' where VisitorID=$visitorid") && $emailStatus=="email sent")
  {
    echo "Checkout Success";
  }
  else {
    echo "checkout failed";
  }



}

  ?>

<?php
include "db.php";
include "mailjet.php";
include "sms.php";
$flag=0;
$person=strtolower($_GET["mem"]);
if($person=="host")
{
  $name=$_POST["hname"];
  $email=$_POST["hemail"];
  $contact=$_POST["hcontact"];

  $sql="INSERT INTO `hostdetails`(Name, Email, Contact) values ('$name', '$email', $contact)";

}
else{
  $name=$_POST["vname"];
  $email=$_POST["vemail"];
  $contact=$_POST["vcontact"];
  $checkout=$_POST["vcheckout"];
  //$person="Visitor"
  $date=date_create();
  $date2=date_format($date,"Y-m-d h:i:s");
  $date_formated=date_format($date, "d M Y H:i");
  $host=$_POST["vhost"];
//  echo $name.$email.$contact.$host;
  $sql="INSERT INTO `visitordetails`( `Name`, `Email`, `Contact`, `HostID`, `CheckIN`, `CheckOUT`) VALUES ('$name', '$email', $contact, $host, '$date2', '$checkout')";


$result=$conn->query("Select * from hostdetails where HostID=$host");
$out=$result->fetch_assoc();
$msg2="Hello ".$out["Name"].", \nA visitor just checked in for your event, here is the visitor details\nName: $name \nEmail: $email \nContact: $contact";
$msg="Hello <b>".$out["Name"]."</b>, <br>A visitor just checked in for your event, here is the visitor details<br>
<table><tr><th>Name</th> <th>$name</th></tr> <tr><td>Email: </td><td>$email</td></tr> <tr><td>Contact:</td><td>$contact</td></tr><tr><td>Check-IN</td><td>$date_formated</td></tr></table>";
$status=send_email($msg, $out["Email"], $out["Name"], $host);
//$status="";
//echo $out["Contact"];
//$smsstatus=send_sms($out["Contact"],$msg2);
//echo "--$smsstatus--";
if($status=="error")
{
  $flag=-1;
}

}

if($conn->query($sql) && $flag==0)
{
  echo "Pass";
}
else {
  echo "Failed";
}
 ?>

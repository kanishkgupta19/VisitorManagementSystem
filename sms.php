<?php
function send_sms($mobile, $message)
{
  include "db.php";
  $url="https://www.way2sms.com/api/v1/sendCampaign";
  $message = urlencode("message-text");// urlencode your message
  $curl = curl_init();
  curl_setopt($curl, CURLOPT_POST, 1);// set post data to true
  curl_setopt($curl, CURLOPT_POSTFIELDS, "apikey=$smskey&secret=$smssecret&usetype=stage&phone=$mobile&senderid=$senderid&message=$message");// post data
  // query parameter values must be given without squarebrackets.
   // Optional Authentication:
  curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
  curl_setopt($curl, CURLOPT_URL, $url);
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
  $result = curl_exec($curl);
  curl_close($curl);
  return $result;
}

?>

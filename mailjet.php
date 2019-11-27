<?php
  require 'vendor/autoload.php';

  use \Mailjet\Resources;
  function send_email($msg, $reciever,$name, $id)
  {
    include "db.php";
    $mj = new \Mailjet\Client($key1,$key2,true,['version' => 'v3.1']);
    $body = [
      'Messages' => [
        [
          'From' => [
            'Email' => "ksamplemail9@gmail.com",
            'Name' => "Innovaccer"
          ],
          'To' => [
            [
              'Email' => "$reciever",
              'Name' => "$name"
            ]
          ],
          'Subject' => "Greetings from Innovacer",
          'TextPart' => "",
          'HTMLPart' => "$msg",
          'CustomID' => "$id"
        ]
      ]
    ];
    $response = $mj->post(Resources::$Email, ['body' => $body]);
    $response->success();
    $st=$response->getData();
    //print_r($st);
    echo $st["Messages"][0]["Status"];
    if($st["Messages"][0]["Status"]=="success")
    {
      return "email sent";
    }
    else{
      return "error";
    }
  }

?>

function checkin()
{
  var visitorname=document.getElementById('visitor_name').value;
  var visitoremail=document.getElementById('visitor_email').value;
  var visitorcontact=document.getElementById('visitor_contact').value;
  var hostid=document.getElementById('visitor_host').value;
  var checkout="00-00-0000 00:00:00";

  if (visitorname=="" || visitoremail=="" || visitorcontact=="" || hostid=="")
  {
     alert("Please fill all the details");
  }
  else {
    $.post("submitdetails.php?mem=visitor",{vcheckout:checkout,vname:visitorname, vemail:visitoremail, vcontact:visitorcontact, vhost:hostid}, function(data, status){
        if(data=="successPass")
        {
          alert("Check IN Successfull");
          location.href="index.php";
        }
        else {
          alert("Some Error Occured. TRY AGAIN!");
        }

    });
  }
}

function registerhost()
{
  var hostname=document.getElementById('host_name').value;
  var hostemail=document.getElementById('host_email').value;
  var hostcontact=document.getElementById('host_contact').value;
  //alert(hostname+hostemail+hostcontact);

  if (hostname=="" || hostemail=="" || hostcontact=="")
  {
     alert("Please fill all the details");
  }
  else {
    $.post("submitdetails.php?mem=host",{hname:hostname, hemail:hostemail, hcontact:hostcontact}, function(data, status){
        if(status=="Success")
        {
          alert("HOST REGISTERED Successfully");
        }
        else {
          alert("Failed in registering Host");
        }
    });
  }
}


function loadHosts()
{
  $.post("hostdetails.php",{},function(data, success){
    document.getElementById("visitor_host").innerHTML=data;
  });
}

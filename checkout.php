<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Checkout</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"-->
  </head>
  <body>
    <nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="index.php">Innovaccer</a>
</nav>
    <div class="container">
      <center><br>
        <h1>Check OUT</h1>
        <br>
        <div class="card">
          <div class="card-body shadow bg-white rounded">
        <form class="form-group">
          <div class="form-group">
            <label>Visitor Name</label>
            <select id="visitorname" class="form-control" style="width:60%">
            </select>
          </div>
          <button type="button" style="text-decoration:none" class="btn btn-danger" onclick="completecheckout()">Check Out</button>
          <a href="index.php" style="text-decoration:none"><button class="btn btn-primary">Go Home</button></a>
        </form>
      </div>
      <div id="msg"></div>
      </div>
      </center>
    </div>
    <!-- jQuery -->
    <script type="text/javascript" src="/MDB/js/jquery.min.js"></script>
<script>
$.post("checkout_final.php?work=getdata",{},function(data,status){
  //alert(data);
  document.getElementById('visitorname').innerHTML=data;
});

function completecheckout()
{
  var v_id=document.getElementById('visitorname').value;
  document.getElementById('msg').innerHTML="Checking Out....";
  $.post("checkout_final.php?work=checkout",{vid:v_id},function(data,status){
    //alert(data);
    if(data=="successCheckout Success")
    {
      alert("Checkout Successfully");
      document.getElementById('msg').innerHTML="Checked OUT Successfully";
      location.href="index.php";
    }
    else {
      alert("Some error Occurred");
    }
  });
}
</script>
  </body>
</html>

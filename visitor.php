<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="/MDB/css/bootstrap.min.css">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="/MDB/css/mdb.min.css">
  </head>
  <body>
    <nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="index.php">Innovaccer</a>
  <a href="checkout.php">CHECKOUT</a>
</nav>
    <div class="container"><br><br>
      <center><h1>Welcome, Visitor</h1></center>

<br><br>
      <div class="card-body shadow bg-white rounded" style="margin-left:150px; margin-right:150px">
                            <!-- Form register -->
                            <form class="AVAST_PAM_signupform AVAST_PAM_loginform" style="width:60%; margin-left:150px; margin-right:150px">
                                <h2 class="text-center font-up font-bold deep-orange-text py-4">Enter Your Details</h2>
                                <div class="md-form">
                                    <i class="fa fa-user prefix grey-text"></i>
                                    <input type="text" id="visitor_name" class="form-control">
                                    <label for="orangeForm-name3">Your name</label>
                                </div>
                                <div class="md-form">
                                    <i class="fa fa-envelope prefix grey-text"></i>
                                    <input type="text" id="visitor_email" class="form-control">
                                    <label for="orangeForm-email3">Your email</label>
                                </div>
                                <div class="md-form">
                                    <i class="fa fa-phone prefix grey-text"></i>
                                    <input type="number" id="visitor_contact" class="form-control">
                                    <label for="orangeForm-pass3">Contact No.</label>
                                </div>

                                <div class="form-group">
                                    <i class="fa fa-lock prefix grey-text"></i>
                                      <select placeholder="Select Host" type="text" id="visitor_host" class="form-control" style="border:none; border-bottom-style:solid; border-bottom-width: 2px; border-bottom-color:#eeeeee">
                                      <option disabled selected>-- Select Host --</option>
                                      <option value="0">Guest</option>
                                      <div id="hosts"></div>
                                    </select>
                                    <label for="orangeForm-host3"></label>
                                </div>
                                <div class="text-center">
                                    <button type="button" onclick="checkin()" class="btn btn-deep-orange waves-effect waves-light">Check - IN<i class="fa fa-angle-double-right pl-2" aria-hidden="true"></i></button>
                                </div>
                            </form>
                            <!-- Form register -->
                        </div>
    </div>
    <!-- jQuery -->
    <script type="text/javascript" src="/MDB/js/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="/MDB/js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="/MDB/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="/MDB/js/mdb.min.js"></script>
 <!-- Js files -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      <script type="text/javascript" src="script.js"></script>
      <script>
      loadHosts();
      </script>

    </body>
  </body>
</html>

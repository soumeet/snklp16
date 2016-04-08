<?php
session_start();	
if(!empty($_SESSION['sid']))
    header("location: client.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sankalp'16 | Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="../assets/images/bigLogo.png">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/lato.css">
  <link rel="stylesheet"  type="text/css" href="css/montserrat.css" >
  <link rel="stylesheet" href="css/dynamics.css">

</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <!--<span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>-->
      </button>
      <a class="navbar-brand" href="login.php"><img src="../assets/images/bigLogo.png" width="50px"/></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
      </ul>
    </div>
  </div>
</nav>

<div  class="container">
<!--<ul class="nav nav-pills nav-justified">
    <li><a data-toggle="pill" href="#client_login">Client</a></li>
</ul>-->
   <div class="tab-content">
    <!--<div class="carousel-caption">
    </div>-->
       
    <div class="carousel-ft" style="width: 200px; position:absolute; left:0; right:0; margin-left:auto; margin-right:auto;">
        <div class="col-md-1">
            <div class="site_logo">
                <a href="#" title=""><img src="../assets/images/bigLogo.png" width="200px" alt="" title=""/></a>
            </div>
            <img src="../assets/images/snklp%202016.png" width="300px" style="position: relative; left: -50px;" alt="" title=""/>
        </div>
         <div id="client_login" class="tab-pane fade in active">
          <br><br><br><br>
          <form class="ajax-form" name="fm_client_login" id="fm_client_login"  action="php/verify.php" method="post">
            <center>
            <table>
              <tr>
                <td>
                  <div class="input-group">
                        <span class="input-group-addon" id="sizing-addon2"></span>
                        <input type="text" class="form-control" placeholder="Username" aria-describedby="sizing-addon2" name="tb_username" id="tb_username">
                  </div><br>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="input-group">
                      <span class="input-group-addon" id="sizing-addon2"></span>
                      <input type="password" class="form-control" placeholder="Password" aria-describedby="sizing-addon2" name="tb_password" id="tb_password">
                  </div><br>
                </td>
              </tr>
              <tr>
                <td>
                  <input class="btn btn-default" type="submit" name="bt_clnt_login" value="Login" style="width: 200px;">
                </td>
              </tr>
              </table>
            </center>
          </form>
    </div>
    </div>
  </div>
</div>
<!--
<footer class="text-center">
  <h5>copyright@2016</h5>
</footer>
-->
    
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/login_validate.js"></script>
</body>
</html>

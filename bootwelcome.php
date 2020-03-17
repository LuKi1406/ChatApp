<?php

session_start();
 

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: bootlogin.php");
    exit;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Chat Application</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    body {
      background-color:#c95553;
      width:100%;
      height: auto;


    }
    .container-fluid {
    background-color:#c95553;
    }
    .row.content {height: auto;}
    
    
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
      color:#c95553;
      padding-bottom: 10%;
      box-shadow:5px 2px 5px #f1f1f1;
    }
    
    
   
    
    
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height: auto;} 
    }
  </style>
</head>
<body>

<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav">
      <h4>Chat Application</h4>
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="bootwelcome.php">Home</a></li>
        <li><a href="bootchat.php">Enter chat</a></li>
        <li><a href="bootreset_password.php">Reset password</a></li>
        <li><a href="bootlogout.php">Sign out of your account</a></li>
      </ul><br>
     
    </div>

    <div class="col-sm-9">
    <div class="page-header">
        <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome back.</h1>
    </div>
   
      
  </div>



</body>
</html>
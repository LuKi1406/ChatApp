<!DOCTYPE html>
<html lang="en">
<head>
  <title>Chat Application</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    body {
      background-color:hotpink;
      color:black;
    }
    
    .container-fluid {
    background-color:hotpink;
    color:black;
    height: auto;
    }
    .row.content {height: auto;}
    
    
    .sidenav {
      background-color: black;
      height: 100%;
      color:hotpink;
      padding-bottom:50%;
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
        <li class="active"><a href="bootlogin.php">Login</a></li>
        <li><a href="bootregister.php">Sign Up</a></li>
       
        
      </ul><br>
      
    </div>

    <div class="col-sm-9">
      <h4><small>Chat aplikacija</small></h4>
      <hr>
      <h2>Kratki opis</h2>
      <h5><span class="glyphicon glyphicon-time"></span> Post by Josipa Gligić, 3/16/2020</h5>
      <h5><span class="label label-danger">Chat</span> <span class="label label-primary">App</span></h5><br>
      <p>Chat aplikacija je projektni zadatak. Prilikom izrade korišteni su:<br>
      PHP, MySQLi, AJAX i JQuery.<br>
      Ukoliko želite koristiti aplikaciju prvo se morate registrirati putem forme za registraciju novog korisnika.
      Za registraciju je potreban unos korisničkog imena i lozinke. Nakon što uspješno obavite registraciju pojavljuje vam se
      forma za unos podataka: <br> "Username"->korisničko ime i "Password"->lozinka.<br>
      Ukoliko je vaš login uspješan dolazite na početnu stranicu gdje imate mogućnost promjene lozinke, ulaska u chat i logouta iz aplikacije.
      Ulaskom u chat imate mogućnost pisanja poruka koje vam se prikazuju na ekranu i istovremeno spremaju u bazu. Svaka poruka ima naznačen datum         kada je poslana.
      </p>
      <br><br>
      
  </div>



</body>
</html>
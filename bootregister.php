<?php

require_once "config.php";
 

$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";

 

if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } else{
        
        $sql = "SELECT id FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link,$sql)){
            
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            
            $param_username = trim($_POST["username"]);
            
            
            
            if(mysqli_stmt_execute($stmt)){
               
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Something went wrong. Please try again later.";
            }

            
            mysqli_stmt_close($stmt);
        }
    }
    
    
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have at least 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm your password.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match!";
        }
    }
    
    
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
        
        
        $sqlIn = "INSERT INTO users (username, password) VALUES (?, ?)";
         
        if($stmtIn = mysqli_prepare($link, $sqlIn)){
            
            mysqli_stmt_bind_param($stmtIn, "ss", $param_username, $param_password);
            
            
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT);
            
            
            if(mysqli_stmt_execute($stmtIn)){
                
                header("location: bootlogin.php");
            } else{
                echo "Something went wrong. Please try again later.";
            }

            
            mysqli_stmt_close($stmtIn);
        }
    }
    
    
    mysqli_close($link);
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
      background-color:#82b567;
    }
    .container-fluid {
    background-color:#82b567;
    }
    .row.content {height: auto;}
    
    
    .sidenav {
      background-color: #f1f1f1;
      color:#82b567;
      height: 100%;
      padding-bottom: 10%;
      box-shadow:5px 2px 5px #f1f1f1;
    }
    
    
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
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
        <li><a href="index.php">About</a></li>
       
        
      </ul><br>
      
    </div>

    <div class="col-sm-9">
    <div class="wrapper">
        <h2>Sign Up</h2>
        <p>Please fill this form to create an account.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Username</label>
                <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Password</label>
                <input type="password" name="password" class="form-control" value="<?php echo $password; ?>">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control" value="<?php echo $confirm_password; ?>">
                <span class="help-block"><?php echo $confirm_password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
                <input type="reset" class="btn btn-default" value="Reset">
            </div>
            <p>Already have an account? <a href="bootlogin.php">Login here</a>.</p>
        </form>
    </div>    
  </div>



</body>
</html>
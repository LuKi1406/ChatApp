
<?php
	include('config.php');
	session_start();
	if (!isset($_SESSION['id']) ||(trim ($_SESSION['id']) == '')) {
	header('location:bootlogin.php');
    exit();
	}
 
	$uquery=mysqli_query($link,"SELECT * FROM users where id='".$_SESSION['id']."'");
	$urow=mysqli_fetch_assoc($uquery);
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
          background-color:#edae2f;
          color:black;
          height: auto;
          width: 100%;
      }
    .container-fluid {
    background-color:#edae2f;
    }
    .row.content {height: auto}
    
    
    .sidenav {
      background-color: black;
      height: 100%;
      color:#edae2f;
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
        <li class="active"><a href="bootwelcome.php">Exit chat</a></li>
        <li><a href="bootlogout.php">Sign out of your account</a></li>
       
      </ul><br>
     
    </div>

    <div class="col-sm-9">
    <h3 style="color:black;">Welcome, <?php echo $urow['username']; ?> </h3>
	<?php
		$query=mysqli_query($link,"SELECT * FROM chat_rooms");
		while($row=mysqli_fetch_array($query)){
			?>
				<div>
				Chat Room Name: <span style="color:black;"><?php echo $row['room_name']; ?></span><br><br>
				</div>
				<form>
					<input type="text" id="msg" style="width:90%; background-color:firebrick;height:40px;">
					<input type="hidden" value="<?php echo $row['chat_room_id']; ?>" id="id">
					<button type="button" id="send_msg">Send</button>
				</form>
				<div id="result" style="overflow-y:scroll; height:400px;padding-top:4%;"></div>
			
			<?php
		}
	?>
      
  </div>

  <script src ="jquery-3.4.1.js"></script>	
<script type = "text/javascript">
 
	$(document).ready(function(){
	displayResult();
	
 
		$('#send_msg').on('click', function(){
			if($('#msg').val() == ""){
				alert('Please write message first');
			}else{
				$msg = $('#msg').val();
				$id = $('#id').val();
				$.ajax({
					type: "POST",
					url: "bootsend_message.php",
					data: {
						msg: $msg,
						id: $id,
					},
					success: function(){
						displayResult();
					}
				});
			}	
		});
	
	});
 
	function displayResult(){
		$id = $('#id').val();
		$.ajax({
			url: 'bootsend_message.php',
			type: 'POST',
			async: false,
			data:{
				id: $id,
				res: 1,
			},
			success: function(response){
				$('#result').html(response);
			}
		});
	}
 
</script>
</body>
</html>

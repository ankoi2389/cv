<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="http://mymaplist.com/js/vendor/TweenLite.min.js"></script>
	<style>
	.vertical-offset-100{
    padding-top:100px;
	}
	
	</style>
</head>
<body>
<?php
    $conn = mysqli_connect('localhost','root','','cv');
    if(!$conn)
        die("Kết nối thất bại");

	if (isset($_POST["btn_submit"])) {
		$username = $_POST["username"];
		$password = $_POST["password"];

		if ($username == "" || $password =="") {
			$message = "Tên đăng nhập hoặc mật khẩu không được để trống!";
			echo "<script type='text/javascript'>alert('$message');</script>";
		}else{
			$sql = "select * from login where username = '$username' and password = '$password' ";
			$query = mysqli_query($conn,$sql);
			$num_rows = mysqli_num_rows($query);
			if ($num_rows==0) {
				$message = "Tên đăng nhập hoặc mật khẩu không đúng!";
				echo "<script type='text/javascript'>alert('$message');</script>";
			}else{
			
				$_SESSION['username'] = $username;
                header('Location: admin.php');
			}
		}
	}
?>
<div class="container">
    <div class="row vertical-offset-100">
    	<div class="col-md-4 col-md-offset-4">
    		<div class="panel panel-default">
			  	<div class="panel-heading">
			    	<h3 class="panel-title" style="text-align:center">Đăng nhập</h3>
			 	</div>
			  	<div class="panel-body">
			    	<form method="POST" action="login.php">
                    <fieldset>
			    	  	<div class="form-group">
			    		    <input class="form-control" placeholder="Tên đăng nhập" name="username" type="text">
			    		</div>
			    		<div class="form-group">
			    			<input class="form-control" placeholder="Mật khẩu" name="password" type="password" value="">
			    		</div>
						<div style="text-align:center">
						<a href="doimk.php">Đổi mật khẩu</a>
						</div>
						</br>
			    		<input class="btn btn-lg btn-success btn-block" type="submit" name="btn_submit" value="Đăng nhập">
			    	</fieldset>
			      	</form>
			    </div>
			</div>
		</div>
	</div>
</div>

</body>
</html>
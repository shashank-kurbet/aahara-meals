<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$username = $_POST['username'];
		$password1 = $_POST['password1'];
		$password2 = $_POST['password2'];
		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$address = $_POST['address'];
        $ngoid = $_POST['ngoid'];

		
		if(!empty($username) && !empty($password1) && !empty($name)  && !empty($email) && !empty($password2) && !empty($phone) && !empty($address) && ($password1===$password2) && !empty($ngoid))
		{

			$u_id = rand(1,10000000);
			$ran_id = rand(time(), 100000000);
			$u_id = rand(1,10000000);
		    mysqli_query($con, "INSERT INTO user (u_id,unique_id, fname ,email, password1) VALUES ({$u_id},{$ran_id}, '{$name}', '{$email}', '{$password1}')");
			//save to database
			
			$query = "insert into users (u_id,name,username,email,phone,address,password1,password2,ngoid) values ('$u_id','$name','$username'  ,'$email' ,'$phone' ,'$address' ,'$password1' ,'$password2','$ngoid' )";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    <title>Registration</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
	<div class="container h-100">
		<div class="row h-100">
			<div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
				<div class="d-table-cell align-middle">

					<div class="text-center mt-4">
						<h1 class="h2">Get started</h1>
						<p class="lead">
							To start creating a better world.
						</p>
					</div>

					<div class="card">
						<div class="card-body">
							<div class="m-sm-4">
								<form method="post">
									<div class="form-group">
										<label>Name</label>
										<input class="form-control form-control-lg" type="text" name="name" placeholder="Enter your name">
									</div>
                                    <div class="form-group">
										<label>NGO id</label>
										<input class="form-control form-control-lg" type="text" name="ngoid" placeholder="Enter your NGO id">
									</div>
									<div class="form-group">
										<label>username</label>
										<input class="form-control form-control-lg" type="text" name="username" placeholder="Enter your username">
									</div>
									<div class="form-group">
										<label>Email</label>
										<input class="form-control form-control-lg" type="email" name="email" placeholder="Enter your email">
									</div>
									<div class="form-group">
										<label>Phone number</label>
										<input class="form-control form-control-lg" type="text" name="phone" placeholder="Enter your phone number">
									</div>
									<div class="form-group">
										<label>Address</label>
										<input class="form-control form-control-lg" type="text" name="address" placeholder="Enter your address">
									</div>
									<div class="form-group">
										<label>Password</label>
										<input class="form-control form-control-lg" type="password" name="password1" placeholder="Enter password">
									</div>
									<div class="form-group">
										<label>Re-enter Password</label>
										<input class="form-control form-control-lg" type="password" name="password2" placeholder="Re-Enter password">
									</div>
									<div class="text-center mt-3">
										 <button type="submit" class="btn btn-lg btn-primary">Sign up</button> <br><br>
									</div>
									<label align="center">already a member?</label>
									<div class="text-center mt-3">
										<a href="login.php">Click to Login</a><br><br>
									</div>
								</form>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>

<style type="text/css">
body{
    margin-top:20px;
    background-color: #f2f3f8;
}
.card {
    margin-bottom: 1.5rem;
    box-shadow: 0 1px 15px 1px rgba(52,40,104,.08);
}

.card {
    position: relative;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid #e5e9f2;
    border-radius: .2rem;
}
</style>

<script type="text/javascript">

</script>
</body>
</html>
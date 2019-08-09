<!DOCTYPE html>
<html lang="en">
<?php

if(isset($_POST['username'])&&isset($_POST['password']))
{

    include '../../model/database.php';
    $pdo=\database\test::returndb();
    $x="false";
    $result=$pdo->query("select * from login");
    $result=$result->fetchall();
    for($i=0;$i!=count($result);$i++)
    {
        if($result[$i][0]==$_POST['username']&&$result[$i][1]==$_POST['password'])
        {
            $x="true";
        }
    }
    $pdo=null;
    echo('<script>alert("'.$x.'");</script>');

    $check =0;

    $password = 'password';
    $username = 'username';
    $hash = dcrypt($password,'$2a$09$anexamplestringforsalt$')."\n<br>";

    $check= $pdo->query("SELECT * FROM users WHERE username = 'username'");
    $check->execute([$_POST['username']]);
    $user = $check->fetch();



    if ($user && password_verify($_POST['password'], $user['username']) ){
        echo "valid";
    }
    else {
        echo "not valid";
    }
}
?>
    <head>
        <title>Prijava</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="../css/Prijava.css">
		<script src = "views\js\prijava.js"></script>
    </head>
    <body id = "body">
        <div class="container">
            <div class="d-flex justify-content-center h-100">
                <div class="card">
                    <div class="card-header">
                        <h3>Sign In</h3>
                    </div>
                    <div class="card-body">
                        <form method="post" action="login.php">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
                        <input type="text" class="form-control" placeholder="username" id = "username" name="password">
                    </div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" placeholder="password" id = "password" name="password">
					</div>
					<div class="row align-items-center remember">
						<input type="checkbox">Remember Me
					</div>
					<div class="form-group">
						<input type="submit" value="Login" class="btn float-right login_btn" onclick = "function()">
                    </div>

				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					Don't have an account?<a href="register.php">Sign Up</a>
				</div>
				<div class="d-flex justify-content-center">
					<a href="register.php">Forgot your password?</a>
				</div>
			</div>
		</div>
	</div>
        </div>
    </body>
</html>
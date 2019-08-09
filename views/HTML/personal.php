<!DOCTYPE html>
<html lang="en">
    <?php
    function test($x,$y)
    {
        if($x=="")
        {
            $y=false;
        }
    }
    function alert($x)
    {
        echo '<script>alert("'.$x.'");</script>';
    }
    if(
        isset($_POST['name'])&&
        isset($_POST['surname'])&&
        isset($_POST['email'])&&
        isset($_POST['password'])&&
        isset($_POST['password2'])&&
        isset($_POST['phone'])&&
        isset($_POST['country'])
    )
    {
        $cond=true;
        test($_POST['name'],$cond);
        test($_POST['surname'],$cond);
        test($_POST['email'],$cond);
        test($_POST['password'],$cond);
        test($_POST['password2'],$cond);
        test($_POST['phone'],$cond);
        test($_POST['country'],$cond);
        if($cond)
        {
            $pass=$_POST['password'];
            if($pass==$_POST['password2'])
            {
                $pdo = (new Preskok\pdo_connect())->getInstance();
                $email=$_POST['email'];
                $result->query("select count(email) from contact where email='$email'");
                echo $result;
            }
            else
            {
                alert("Both passwords must match");
            }
        }
        else
        {
            alert("Please fill in all neccessary fields");
        }
    }
    ?>
    <head>
        <title>Registracija novega posameznika</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

		<link rel="stylesheet" type="text/css" href="../css/Prijava.css">
		<script src = "../js/prijava.js"></script>

        <link rel="stylesheet" type="text/css" href="../css/Registracija.css">

        <link rel="stylesheet" type="text/css" href="../css/RegistracijaPosameznika.css">

    </head>
    <body>
        <div class="container">
        <div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3 style="text-align:center">Register</h3>
			</div>
			<div class="card-body">
				<form method="post" action="personal.php">
                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="input-group form-group">	
                                <input type="text" class="form-control" placeholder="ime" name="name">	
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="input-group form-group">	
						<input type="text" class="form-control" placeholder="priimek" name="surname">	
					</div>
                        </div>
                        </div>
                    <div class="row">
                        <div class="col-sm">
                    <div class="input-group form-group">	
						<input type="text" class="form-control" placeholder="email" name="email">
					</div>
                    </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="input-group form-group">
						<input type="password" class="form-control" placeholder="geslo" name="password">
					</div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="input-group form-group">
						<input type="password" class="form-control" placeholder="potrdi geslo" name="password2">
					</div>
                        </div>
                    </div>
                    <div class="row">
                    <div class="col-sm">
                    <div class="input-group form-group">	
						<input type="text" class="form-control" placeholder="telefon" name="phone">	
					</div>
                    </div>
                    </div>
                    <div class="row">
                        <div class="col-sm">
                    <div class="input-group form-group">	
						<input type="text" class="form-control" placeholder="država" name="country">	
					</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="input-group form-group">	
						<input type="text" class="form-control" placeholder="mesto" name="city">	
					</div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="input-group form-group">	
						<input type="text" class="form-control" placeholder="poštna št." name="postnum">	
					</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm">
                    <div class="input-group form-group">	
						<input type="text" class="form-control" placeholder="naslov" name="address">	
					</div>
                        </div>
                    </div>
                    <div class="row">
                    <div class="col-sm">
					<div class="form-group">
						<input type="submit" value="Registriraj" class="btn login_btn" name="subbutton">
					</div>
                    </div>
                    </div>
				</form>
			 </div>
			</div>
		</div>
	</div>
    </body>
</html>
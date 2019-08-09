<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Registracija</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/bootstrap-filestyle.min.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="../css/RegistracijaPosameznika.css">
    </head>
    <body>
        <div class="container">
        <div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<center><h3>Registracija novega trgovca</h3></center>
			</div>
			<div class="card-body">
				<form>
                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="input-group form-group">	
                                <input type="text" class="form-control" placeholder="Ime podjetja" name="namemerchant">	
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="input-group form-group">	
                                <input type="text" class="form-control" placeholder="Davčna številka" name="taxnum">	
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm">
                           <div class="input-group form-group">	
						      <input type="text" class="form-control" placeholder="Email" name="emailmerchant">
					       </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="input-group form-group">
                                <input type="password" class="form-control" placeholder="Geslo" name="passwordmerchant">
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="input-group form-group">
                                <input type="password" class="form-control" placeholder="Potrdi geslo" name="password2merchant">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm">
                            <div class="input-group form-group">	
                                <input type="text" class="form-control" placeholder="Država" name="countrymerchant">	
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="input-group form-group">	
                                <input type="text" class="form-control" placeholder="Mesto" name="citymerchant">	
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="input-group form-group">	
                                <input type="text" class="form-control" placeholder="Poštna št." name="postnummerchant">	
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm">
                            <div class="input-group form-group">	
                                <input type="text" class="form-control" placeholder="Naslov" name="addressmerchant">	
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm">
                            <div class="custom-file">
                              <input type="file" accept="image/*,.pdf" placeholder="Logo URL" class="custom-file-input" id="customFileLangHTML" name="logo">
                              <label class="custom-file-label" for="customFileLangHTML" data-browse="browse">Izberi logo</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm">
					       <div class="form-group mt-3">

						            <a href="register.php"></a>


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
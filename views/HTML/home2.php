<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        .card-body{
    background-color: rgba(76, 83, 91, 1);
    border-width: 2px;
    border-style: solid;
    height: 680px;
}
        body{
            background-image: url("ozadje.png"); 
            padding-top: 56px;
        }
        .login_btn{
        color: black !important;
        background-color: #FFC312 !important;
        width: 100px !important;
        float: right !important;
        }
        .login_btn:hover{
        color: black !important;
        background-color: white !important;
        }
    </style>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

  <title>Heroic Features - Start Bootstrap Template</title>

  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/heroic-features.css" rel="stylesheet">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar fixed-top">
    <div class="container">
      <a class="navbar-brand" href="home2.php">CAR MARKET</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">objavi oglas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php">prijava</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="register.php">registreraj se</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container mt-5">

    <!-- Jumbotron Header -->
      <div class="container">
    <div class="d-flex justify-content-center h-100">
        <div class="card">
            <form>
                <div class="card-body filter">

                    <select name="brand" class="browser-default custom-select custom-select-lg mb-3">
                        <option value="volvo">Volvo</option>
                        <option value="saab">Saab</option>
                        <option value="mercedes">Mercedes</option>
                        <option value="audi">Audi</option>
                    </select>

                    <select name="price_from" class="browser-default custom-select custom-select-lg mb-3"></select>
                    <select name="brand">
                        {% for i in brands %}
                            <option>{{ i }}</option>
                        {% endfor %}
                    </select>
                    
                    <select name="price_from">
                        <option value="">price from</option>
                        <option value="100 EUR">100 EUR</option>
                        <option value="500 EUR">500 EUR</option>
                        <option value="1.000 EUR">1.000 EUR</option>
                        <option value="1.500 EUR">1.500 EUR</option>
                        <option value="2.000 EUR">2.000 EUR</option>
                        <option value="2.500 EUR">2.500 EUR</option>
                        <option value="3.000 EUR">3.000 EUR</option>
                        <option value="3.500 EUR">3.500 EUR</option>
                        <option value="4.000 EUR">4.000 EUR</option>
                        <option value="4.500 EUR">4.500 EUR</option>
                        <option value="5.000 EUR">5.000 EUR</option>
                        <option value="6.000 EUR">6.000 EUR</option>
                        <option value="7.000 EUR">7.000 EUR</option>
                        <option value="8.000 EUR">8.000 EUR</option>
                        <option value="9.000 EUR">9.000 EUR</option>
                        <option value="10.000 EUR">10.000 EUR</option>
                        <option value="11.000 EUR">11.000 EUR</option>
                        <option value="12.000 EUR">12.000 EUR</option>
                        <option value="13.000 EUR">13.000 EUR</option>
                        <option value="14.000 EUR">14.000 EUR</option>
                        <option value="15.000 EUR">15.000 EUR</option>
                        <option value="16.000 EUR">16.000 EUR</option>
                        <option value="17.000 EUR">17.000 EUR</option>
                        <option value="18.000 EUR">18.000 EUR</option>
                        <option value="19.000 EUR">19.000 EUR</option>
                        <option value="20.000 EUR">20.000 EUR</option>
                        <option value="25.000 EUR">25.000 EUR</option>
                        <option value="30.000 EUR">30.000 EUR</option>
                        <option value="35.000 EUR">35.000 EUR</option>
                        <option value="40.000 EUR">40.000 EUR</option>
                        <option value="45.000 EUR">45.000 EUR</option>
                        <option value="50.000 EUR">50.000 EUR</option>
                        <option value="60.000 EUR">60.000 EUR</option>
                        <option value="70.000 EUR">70.000 EUR</option>
                        <option value="80.000 EUR">80.000 EUR</option>
                        <option value="90.000 EUR">90.000 EUR</option>
                        <option value="100.000 EUR">100.000 EUR</option>
                    </select>

                    <select name="price_to" class="browser-default custom-select custom-select-lg mb-3">
                        <option value="">price to</option>
                        <option value="100 EUR">100 EUR</option>
                        <option value="500 EUR">500 EUR</option>
                        <option value="1.000 EUR">1.000 EUR</option>
                        <option value="1.500 EUR">1.500 EUR</option>
                        <option value="2.000 EUR">2.000 EUR</option>
                        <option value="2.500 EUR">2.500 EUR</option>
                        <option value="3.000 EUR">3.000 EUR</option>
                        <option value="3.500 EUR">3.500 EUR</option>
                        <option value="4.000 EUR">4.000 EUR</option>
                        <option value="4.500 EUR">4.500 EUR</option>
                        <option value="5.000 EUR">5.000 EUR</option>
                        <option value="6.000 EUR">6.000 EUR</option>
                        <option value="7.000 EUR">7.000 EUR</option>
                        <option value="8.000 EUR">8.000 EUR</option>
                        <option value="9.000 EUR">9.000 EUR</option>
                        <option value="10.000 EUR">10.000 EUR</option>
                        <option value="11.000 EUR">11.000 EUR</option>
                        <option value="12.000 EUR">12.000 EUR</option>
                        <option value="13.000 EUR">13.000 EUR</option>
                        <option value="14.000 EUR">14.000 EUR</option>
                        <option value="15.000 EUR">15.000 EUR</option>
                        <option value="16.000 EUR">16.000 EUR</option>
                        <option value="17.000 EUR">17.000 EUR</option>
                        <option value="18.000 EUR">18.000 EUR</option>
                        <option value="19.000 EUR">19.000 EUR</option>
                        <option value="20.000 EUR">20.000 EUR</option>
                        <option value="25.000 EUR">25.000 EUR</option>
                        <option value="30.000 EUR">30.000 EUR</option>
                        <option value="35.000 EUR">35.000 EUR</option>
                        <option value="40.000 EUR">40.000 EUR</option>
                        <option value="45.000 EUR">45.000 EUR</option>
                        <option value="50.000 EUR">50.000 EUR</option>
                        <option value="60.000 EUR">60.000 EUR</option>
                        <option value="70.000 EUR">70.000 EUR</option>
                        <option value="80.000 EUR">80.000 EUR</option>
                        <option value="90.000 EUR">90.000 EUR</option>
                        <option value="100.000 EUR">100.000 EUR</option>
                    </select>

                    <select name="km" class="browser-default custom-select custom-select-lg mb-3">
                        <option value="">choose km</option>
                        <option value="-5000">-5000km</option>
                        <option value="-10000">-10000km</option>
                        <option value="-20000">-20000km</option>
                        <option value="-25000">-25000km</option>
                        <option value="-50000">-50000km</option>
                        <option value="-100000">-100000km</option>
                        <option value="-150000">-150000km</option>
                        <option value="-200000">-200000km</option>
                        <option value="-250000">-250000km</option>
                        <option value="250000-">250000km-</option>
                    </select>

                    <select name="Fuel" class="browser-default custom-select custom-select-lg mb-3">
                        <option value="disel">disel</option>
                        <option value="gasoline">gasoline</option>
                        <option value="electricity">electricity</option>
                    </select >

                    <br>
                    <br>

                    <select name="model" class="browser-default custom-select custom-select-lg mb-3">
                        <option value="">choose model</option>
                        <option value="A4">A4</option>
                        <option value="R8">R8</option>
                        <option value="C3">C3</option>
                        <option value="Clio">Clio</option>
                    </select>

                    <select name="year_from" class="browser-default custom-select custom-select-lg mb-3">
                        <option value="1919">1919</option>
                        <option value="1950">1950</option>
                        <option value="1990">1990</option>
                    </select>

                    <select name="year_to" class="browser-default custom-select custom-select-lg mb-3">
                        <option value="1919">1919</option>
                        <option value="1950">1950</option>
                        <option value="1990">1990</option>
                    </select>
                    <div style="color: white">
                    <input type="checkbox" name="used" value="new" id="fancy-checkbox-default">
                    New

                    <input type="checkbox" name="used" value="testing">
                    Testing

                    <input type="checkbox" name="used" value="used">
                    Useds
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Išči" class="btn login_btn" onclick = "send_ajax_login()">
                    </div>
                </div>
            </form>
        </div>
        </div>
    </div>
</div>

  <footer class="navbar fixed-bottom py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
    </div>
  </footer>
      
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>

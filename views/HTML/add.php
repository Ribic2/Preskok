<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <style>
        .borderc{
            border: solid rgba(76, 83, 91, 1) 2px;
            border-radius: 3px;
        }
        body{
            background-image: url(../css/ozadje.png )
        }
        .login_btn{
            color: black;
            background-color: #FFC312;
            width: 150px;
        }
        .login_btn:hover{
            color: black;
            background-color: white;
            border: solid black 1px;
        }
    </style>
</head>
<body class="bg-info">
    <div class="container">
        <!--title-->
        <div class="row borderc p-5 bg-white mt-2" style="border: solid  rgba(76, 83, 91, 1)">
            <div class="col-sm-8 p-3">
                <h1>Ime Avta</h1>
            </div>
            <div class="col-sm-4 borderc text-center p-3 bg-light">
                <h1>5000€</h1>
            </div>
        </div>



        <!--content-->
        <div class="row mt-4 text-center">
            <!--slike-->
            <div class="col-md-8 borderc p-3 bg-white">
                <img src="https://www.stickpng.com/assets/images/59db69d33752880e93e16efc.png" alt="Slika" class="border" style="width:100%;">
                <div style="height: 125px;" class="mt-2">
                    <img src="https://partycity6.scene7.com/is/image/PartyCity/_pdp_sq_?$_1000x1000_$&$product=PartyCity/815692" alt="Slika" style="height: 100%;" class="float-left border mr-2">
                    <img src="https://target.scene7.com/is/image/Target/GUEST_5cf383ce-5727-4640-8028-400700726f88?wid=488&hei=488&fmt=pjpeg" alt="Slika" style="height: 100%;" class="float-left border mr-2">
                    <img src="https://www.pendleslotracing.co.uk/media/catalog/product/2/7/27539_2.jpg" alt="Slika" style="height: 100%;" class="float-left border mr-2">
                    <img src="https://vignette.wikia.nocookie.net/disney/images/4/46/Profile_-_Lightning_McQueen.jpg/revision/latest?cb=20190502052906" alt="Slika" style="height: 100%;" class="float-left border mr-2">
                </div>
            </div>


            <!--kontakti-->
            <div class="borderc text-center ml-4 card" style="width:30%;">
                <div class="card-body " style="border-top-left-radius: 3px; border-top-right-radius: 3px; background-color: #FFC312">
                    <h2>Prodajalec:</h2>
                </div>
                <div class="card-body">
                    <h1>Marko</h1>
                </div>
                <div class="card-body">
                    <h2>069 420 007</h2>
                </div>
                <div class="card-body">
                    <h4>8000 Novo mesto</h4>
                </div>
                <div class="card-body">
                    <a class="btn login_btn">Pošlji sporočilo</a>
                </div>
            </div>
        </div>
        <!--specs-->
        <div class="p-5 card mt-4" style="border-radius: 3px; width: 100%;">
            <div class="card-body text-white" style="background-color: rgba(76, 83, 91, 1)">
                <h1>Osnovni podatki:</h1>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4 border-right p-1">1. registracija:</div>
                    <div class="col-md-8"></div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-4 border-right p-1">Letnik:</div>
                    <div class="col-md-8 p-1"></div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-4 border-right p-1">Starost:</div>
                    <div class="col-md-8 p-1"></div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-4 border-right p-1">Tehnični pregled:</div>
                    <div class="col-md-8 p-1"></div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-4 border-right p-1">Prevoženi km:</div>
                    <div class="col-md-8 p-1"></div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-4 border-right p-1">Gorivo:</div>
                    <div class="col-md-8 p-1"></div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-4 border-right p-1">Motor:</div>
                    <div class="col-md-8 p-1"></div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-4 border-right p-1">Menjalnik:</div>
                    <div class="col-md-8 p-1"></div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-4 border-right p-1">Oblika:</div>
                    <div class="col-md-8 p-1"></div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-4 border-right p-1">Barva:</div>
                    <div class="col-md-8 p-1"></div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
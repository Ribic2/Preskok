<!DOCTYPE html>
<html lang="en">
<head>
    <title>CAR LIST</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/list.css">

</head>
<body>
<<<<<<< HEAD
    <div class="container">
        <div class="row" id = "content_area">
=======
<?php
include '../templates/header.php';
?>
    <div class="container" style="height: 1500px">
        <div class="row">
>>>>>>> 079eca6dfa8f23bcd1ff5235de6711af05b8f7f7

            <div class="col-xl-3 mg_">
                <div class="card pad">
                    <h3 class="card-title"><a>Filters</a></h3>
                    <div class="card mg_">

                        <div class="card-body ad naslov">

                            <h4 class="card-title"><a>age</a></h4>
                            <div class="card-body filtri">
                                <form>
                                    <input type="checkbox"  value="age">Used <br>
                                    <input type="checkbox"  value="age">Testing <br>
                                    <input type="checkbox"  value="age">New <br>

                                </form>
                            </div>
                        </div>

                    </div>
                    <div class="card mg_">

                        <div class="card-body ad naslov">

                            <h4 class="card-title"><a>milage</a></h4>
                            <div class="card-body filtri">
                                <form>
                                    <input type="checkbox"  value="milage">10000 km <br>
                                    <input type="checkbox"  value="milage">50000 km <br>
                                    <input type="checkbox"  value="milage">200000 km<br>

                                </form>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

            <div class="col-xl-9">
                <div class="card mg_">
                    <div class="card-body ad">
<<<<<<< HEAD
                        <?php
                            include '../../model/pdo_connect.php';
                            $pdo = (new Preskok\pdo_connect())->getInstance();
                            
                            $sql = "select brand.brandname, ad.price, contact.phone_number, ad.first_registration, location.city, ad.distance_driven, engine_type.engine_type, engine_type.gearbox from ad, brand, user, engine_type, location, contact where brand.brandname = 'BMW' limit 5";
                            $stmt = $pdo->query($sql);
                            $stmt->execute();
                            $resoult = $stmt->fetchAll();
                            
                            foreach($resoult as $row){
                                echo "<div class=row>";
                                echo "<div class=col-xl-3>";
                                echo "<img src=https://images.pexels.com/photos/210019/pexels-photo-210019.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500 class=img>";
                                echo "</div>";
                                echo "<div class=col-xl-9>";
                                echo "<div class=row>";
                                echo "<div class=col-xl-9>";
                                echo                    "<h5 class=card-title><a>".$row['brandname']."</a></h5>";
                                echo                    "<div class=info_car>";
                                echo                        "-".$row['engine_type'];
                                echo                        "<br>";
                                echo                        "-".$row['distance_driven'];
                                echo                        "<br>";                               
                                echo                        "-".$row['gearbox'];
                                echo                        "<br>";
                                echo                        "-".$row['first_registration'];
                                echo                        "<br>";
                                echo                    "</div>";
                                echo                    "<br>";
                                echo                    "<a class=btn login_btn><i class=fas fa-clone left></i></a>";
                                echo               "</div>";
                                echo                "<div class=col-xl-3>";
                                echo                    "<h5 class=card-title><a>".$row['price']."</a></h5>";
                                echo                    "<br>";
                                echo                    "<br>";
                                echo                    "<br>";
                                echo                    "<h5 class='card-title'><a>".$row['city']."</a></h5>";
                                echo                    "<h5 class='card-title'><a>".$row['phone_number']."</a></h5>";
                                echo                "</div>";
                                echo            "</div>";
                                echo        "</div>";
                                echo    "</div>";
                                echo "</div>";
                            }
                    ?>
=======
                        <div class="row">
                            <div class="col-xl-3">
                                <img src="https://images.pexels.com/photos/210019/pexels-photo-210019.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" class="img">
                                <!-- img -->
                            </div>
                            <div class="col-xl-9">
                                <!-- info -->
                                <div class="row">
                                    <div class="col-xl-9">

                                        <h5 class="card-title"><a>Car name</a></h5>

                                        <div class="info_car">
                                            -basic car data<br>
                                            -basic car data<br>
                                            -basic car data<br>
                                            -basic car data
                                        </div>
                                        <br>
                                        <a class="btn login_btn"><i class="fas fa-clone left"></i> View AD</a>
                                    </div>
                                    <div class="col-xl-3">
                                        <h5 class="card-title"><a>cena:2000€</a></h5>
                                        <br>
                                        <br>
                                        <br>
                                        <h5 class="card-title"><a>Region</a></h5>
                                        <h5 class="card-title"><a>Number</a></h5>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                <div class="card mg_">

                    <div class="card-body ad">
                        <div class="row">
                            <div class="col-xl-3">
                                <img src="https://images.pexels.com/photos/210019/pexels-photo-210019.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" class="img">
                                <!-- img -->
                            </div>
                            <div class="col-xl-9">
                                <!-- info -->
                                <div class="row">
                                    <div class="col-xl-9">

                                        <h5 class="card-title"><a>Car name</a></h5>

                                        <div class="info_car">
                                            -basic car data<br>
                                            -basic car data<br>
                                            -basic car data<br>
                                            -basic car data
                                        </div>
                                        <br>
                                        <a class="btn login_btn"><i class="fas fa-clone left"></i> View AD</a>
                                    </div>
                                    <div class="col-xl-3">
                                        <h5 class="card-title"><a>cena:15€</a></h5>
                                        <br>
                                        <br>
                                        <br>
                                        <h5 class="card-title"><a>Region</a></h5>
                                        <h5 class="card-title"><a>Number</a></h5>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

>>>>>>> 079eca6dfa8f23bcd1ff5235de6711af05b8f7f7
                </div>


            </div>
        </div>
    </div>
        <?php
        include '../templates/footer.php';
        ?>
</body>
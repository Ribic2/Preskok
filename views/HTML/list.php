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
    <div class="container">
        <div class="row" id = "content_area">

            <div class="col-xl-3 mg_">
                <div class="card pad">
                    <h3 class="card-title"><a>Filtri</a></h3>
                    <div class="card mg_">

                        <div class="card-body ad naslov">

                            <h4 class="card-title"><a>starost</a></h4>
                            <div class="card-body filtri">
                                <form>
                                    <input type="checkbox"  value="starost">Used <br>
                                    <input type="checkbox"  value="starost">Testing <br>
                                    <input type="checkbox"  value="starost">New <br>

                                </form>
                            </div>
                        </div>

                    </div>
                    <div class="card mg_">

                        <div class="card-body ad naslov">

                            <h4 class="card-title"><a>kilometrina</a></h4>
                            <div class="card-body filtri">
                                <form>
                                    <input type="checkbox"  value="kilometrina">10000 km <br>
                                    <input type="checkbox"  value="kilometrina">50000 km <br>
                                    <input type="checkbox"  value="kilometrina">200000 km<br>

                                </form>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

            <div class="col-xl-9">
                <div class="card mg_">
                    <div class="card-body ad">
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
                </div>


            </div>
        </div>
</body>
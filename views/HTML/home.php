<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .kkk
        {
            background-image:url(../../model/database.php)
        }
    </style>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/home.css">
</head>
<body onload="load()">

<div class="container">
    <div class="d-flex justify-content-center h-100">
        <div class="card">
            <form>
                <div class="card-body filter">
                    <select name="brand">
                        <?php
                            require __DIR__ . '/vendor/autoload.php';

                            /*$obj = new Preskok\connect_to_database();

                            $sql = "SELECT brandname from brand";

                            $stmt = $obj->query($sql);
                            foreach($stmt as $row){
                                echo '<option value="'.$row['brandname'].'">'.$row['brandname'].'</option>';
                            }*/
                            for($i = 0; $i <= 10; $i++){
                                echo "<option value = ".$i.">".$i."</option>";
                            }

                        ?>
                    </select>
                    <select name="price_from"><!-- do 5  10 20 25 50 100 150 200 250-->
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

                    <select name="price_to"><!-- do 5  10 20 25 50 100 150 200 250-->
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

                    <select name="km"><!-- do 5  10 20 25 50 100 150 200 250-->
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

                    <select name="Fuel">
                        <option value="disel">disel</option>
                        <option value="gasoline">gasoline</option>
                        <option value="electricity">electricity</option>
                    </select>

                    <br>
                    <br>

                    <select name="model">
                        <option value="">choose model</option>
                        <option value="A4">A4</option>
                        <option value="R8">R8</option>
                        <option value="C3">C3</option>
                        <option value="Clio">Clio</option>
                    </select>

                    <select name="year_from">
                        <option value="1919">1919</option>
                        <option value="1950">1950</option>
                        <option value="1990">1990</option>
                    </select>

                    <select name="year_to">
                        <option value="1919">1919</option>
                        <option value="1950">1950</option>
                        <option value="1990">1990</option>
                    </select>

                    <input type="checkbox" name="used" value="new">
                    New

                    <input type="checkbox" name="used" value="testing">
                    Testing

                    <input type="checkbox" name="used" value="used">
                    Used
                </div>
            </form>
        </div>

    </div>
</div>
    <script>
        function load()
        {  
            window.history.pushState("page2","title","google.com");
            //alert();
        }
    </script>
    </body>
</html>
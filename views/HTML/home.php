<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <div>
        <form>

            <select name="brand">
                <option value="volvo">Volvo</option>
                <option value="saab">Saab</option>
                <option value="mercedes">Mercedes</option>
                <option value="audi">Audi</option>
            </select>

            <select name="model">
                <option value="A4">A4</option>
                <option value="R8">R8</option>
                <option value="C3">C3</option>
                <option value="Clio">Clio</option>
            </select>

            <input type="text" name="price_from" alt="price from">

            <input type="text" name="price_to" alt="price to">

            <select name="km"><!-- do 5  10 20 25 50 100 150 200 250-->
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

            <input type="radio" name="new">
            New

            <input type="radio" name="testing">
            Testing

            <input type="radio" name="used">
            Used
        </form>
    </div>


</div>

</body>
</html>
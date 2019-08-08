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

            <select name="km">
                <option value="0-10">0-10</option>
                <option value="10-100">10-100</option>
                <option value="100-50.000">100-50.000</option>
                <option value="50.000">50.000-</option>
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
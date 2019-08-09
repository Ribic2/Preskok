<?php 

require __DIR__ . '/vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader(__DIR__ . '/views/HTML/');
$twig = new \Twig\Environment($loader, []);


// create a server request object
$request = Zend\Diactoros\ServerRequestFactory::fromGlobals
    (
    $_SERVER,
    $_GET,
    $_POST,
    $_COOKIE,
    $_FILES
);
//sql

/*
use Aura\Sql\ExtendedPdo;
use Aura\Sql\ConnectionLocator;

$connection_factory = new ConnectionLocator();

$connection_factory->setDefault(function () {
    return new ExtendedPdo(
        'mysql:160.153.133.165;dbname=Preskok',
        'preskok',
        'Preskok2019'
    );
});

*/

/*$pdo = new PDO('mysql:160.153.133.165;dbname=Preskok','preskok','Preskok2019');
var_dump($pdo);exit;*/

$pdo = (new Preskok\pdo_connect())->getInstance();
// create the router container and get the routing map
$routerContainer = new Aura\Router\RouterContainer();
$map = $routerContainer->getMap();


// add a route to the map, and a handler for it

//Home root
$map->get('home', '/', function ($request) use ($twig, $pdo) {
    $response = new Zend\Diactoros\Response();
    $stmt = $pdo->prepare("SELECT * FROM brand;");
    $stmt->execute();

    $car_brands = array();
   
    foreach($stmt->fetchAll() as $row){
        array_push($car_brands, $row['brandname']);
    }

    $response->getBody()->write(
        $twig->render('home.php', ['brands'=>$car_brands])
    );
    return $response;
});

//Login
$map->get('login', '/login', function ($request) use ($twig, $pdo) {
    $response = new Zend\Diactoros\Response();
    
    $response->getBody()->write(
        $twig->render('Prijava.php', )
    );
    return $response;
});

//Registration selecter
$map->get('registration_selector', '/registration_selector', function ($request) use ($twig) {
    $response = new Zend\Diactoros\Response();
    $response->getBody()->write(
        $twig->render('IzberaRegistracije.php')
    );
    return $response;
});

//Registration for normal user
$map->get('registration_private', '/registration', function ($request) use ($twig) {
    $response = new Zend\Diactoros\Response();
    $response->getBody()->write(
        $twig->render('RegistracijaPosameznika.php')
    );
    return $response;
});
//Registration for Seller
$map->get('registration_sellet', '/registration_seller', function ($request) use ($twig) {
    $response = new Zend\Diactoros\Response();
    $response->getBody()->write(
        $twig->render('RegistracijaTrgovca.php')
    );
    return $response;
});
/*
$map->get('user.edit', '/user/edit', function ($request) {
   $responseHandler("Text");
});*/


$responseHandler = function(string $html)
{
    $response = new Zend\Diactoros\Response();
    $response->getBody()->write($html);
    return $response;
};
// get the route matcher from the container ...
$matcher = $routerContainer->getMatcher();

// .. and try to match the request to a route.
$route = $matcher->match($request);
if (! $route) {
    http_response_code(404);
    exit;
}

// add route attributes to the request
foreach ($route->attributes as $key => $val) {
    $request = $request->withAttribute($key, $val);
}

// dispatch the request to the route handler.
// (consider using https://github.com/auraphp/Aura.Dispatcher
// in place of the one callable below.)
$callable = $route->handler;
$response = $callable($request);

// emit the response
foreach ($response->getHeaders() as $name => $values) {
    foreach ($values as $value) {
        header(sprintf('%s: %s', $name, $value), false);
    }
}
http_response_code($response->getStatusCode());
echo $response->getBody();
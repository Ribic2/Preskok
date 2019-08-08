<?php 

require __DIR__ . '/vendor/autoload.php';

// create a server request object
$request = Zend\Diactoros\ServerRequestFactory::fromGlobals
    (
    $_SERVER,
    $_GET,
    $_POST,
    $_COOKIE,
    $_FILES
);

// create the router container and get the routing map
$routerContainer = new Aura\Router\RouterContainer();
$map = $routerContainer->getMap();

// add a route to the map, and a handler for it
$map->get('index', '/', function ($request) {
    $response = new Zend\Diactoros\Response();
    $response->getBody()->write("INDEX PAGE");
    return $response;
});


$map->get('home', '/home', function ($request) {
    $response = new Zend\Diactoros\Response();
    //$response->getBody()->write("HOME PAGE");
    //return $response;
    
    exit;
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
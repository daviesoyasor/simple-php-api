<?php
    require_once 'router.php';

    $router = new Router();


    $router->get('/', 'HomeController@index');




    // /**
    //  * Get the HTTP method
    //  */
    // $httpMethod = $_SERVER['REQUEST_METHOD'];



    // /**
    //  * Access Request data that wasn't sent through a web html (i.e Form data), but sent like an API using 'php://input'
    //  * Decode the request data, since it comes as a JSON
    //  */
    // $rawRequestData = file_get_contents('php://input');
    // $request = json_decode($rawRequestData);
?>
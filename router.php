<?php
    require_once 'extensions.php';
    class Router {
        private $routes = [];

        public function get($url, $controllerAction){
            $this->routes[$url] = $controllerAction;
            /**
             * Get the HTTP method
             */
            $httpMethod = $_SERVER['REQUEST_METHOD'];
            if($httpMethod != 'GET'){
                json_response(['error' => true, 'message' => "HTTP method not supported"]);
                return;
            }
            $url = $_SERVER['REQUEST_URI'];
            if(array_key_exists($url,$this->routes)){
                $controllerAction = $this->routes[$url];
                list($controllerName, $actionName) = explode('@', $controllerAction);

                require_once 'controllers/'.$controllerName.'.php';
                $controller = new $controllerName();
    
                $controller->$actionName();
            }else{
                json_response(['error' => true, 'message' => "404: Route not found"]);
                return;
            }

        }
    }

?>
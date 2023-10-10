<?php
require_once 'extensions.php';
class HomeController {
    public function index() {
        json_response(['error' => false, 'message' => "Welcome to Home page"]);
    }
}
?>
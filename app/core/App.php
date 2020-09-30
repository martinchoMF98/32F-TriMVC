<?php
class App {
    protected $contoller = 'home';
    protected $method = 'index';
    protected $params = [];
    public function __construct()
    {
        echo "App is running succesfully";
    }
}
?>
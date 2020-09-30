<?php
class App
{
    protected $contoller = 'home';
    protected $method = 'index';
    protected $params = [];
    public function __construct()
    {
        echo "App is running succesfully";
        $url = $this->parseUrl();
        print_r($url);
    }
    public function parseUrl()
    {
        if (isset($_GET['url'])) {
            return $url = explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
        }
    }
}

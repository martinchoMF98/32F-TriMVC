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
        // print_r($url);

        if(file_exists('../app/controllers'.$url[0].'php')){
            $this->controller = $url[0];
            unset($url[0]);
        }
        echo $this->contoller;

        if(isset($url[1])){
            if(method_exists($this->contoller, $url[1])){
                $this->method = $url[1];
                unset($url[1]);
            }
        }
        echo $this->method;

        $this->params = $url ? array_values($url) : [];
        print_r($this->params);

        call_user_func_array([$this->contoller, $this->method], $this->params);
    }
    public function parseUrl()
    {
        if (isset($_GET['url'])) {
            return $url = explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
        }
    }
}

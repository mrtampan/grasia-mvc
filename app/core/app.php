<?php

class app
{

    protected $controller = 'home';
    protected $method = 'index';
    protected $params = [];
    public function __construct()
    {
        $url = $this->parseURL();

        // access folder controller
        if (isset($url) && file_exists('../app/controllers/' . $url[0] . '.php')) {
            $this->controller = $url[0];
            unset($url[0]);
        }

        require_once '../app/controllers/' . $this->controller . '.php';

        //show new class in controller from url
        $this->controller = new $this->controller;

        // method
        if (isset($url[1])) {
            if (method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        // params
        if (!empty($url)) {
            $this->params = array_values($url);
        }

        // Running controller and method, then sending all params if exist
        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    public function parseURL()
    {
        if (isset($_GET['url'])) {

            // remove '/' last url
            $url = rtrim($_GET['url'], '/');

            // clean url
            $url = filter_var($url, FILTER_SANITIZE_URL);

            // crack url 
            $url = explode('/', $url);

            return $url;
        }
    }
}

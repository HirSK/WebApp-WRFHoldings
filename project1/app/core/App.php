<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 7/25/2017
 * Time: 10:22 AM
 */
class App{

    protected $controller = 'Home';
    protected $method = 'index';
    protected $params = [];


    public function __construct()
    {
        $url = $this -> parseUrl();

        if(file_exists('../controller/'.$url[0].'.php')){
            $this->controller = $url[0];
            unset($url[0]);
        }
        require_once '../controller/'.$this->controller.'.php';

        if(isset($url[1])){
            if(method_exists($this->controller,$url[1])){
                $this->method = $url[1];
                unset($url[1]);
            }
        }

    }

    public function parseUrl(){
        if(isset($_GET['url'])){
                return $url = explode('/',filter_var(rtrim($_GET['url'],'/'),FILTER_SANITIZE_URL));
        }
    }
}
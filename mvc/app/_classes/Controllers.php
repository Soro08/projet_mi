<?php
/**
 * Created by PhpStorm.
 * User: nan
 * Date: 22/11/2018
 * Time: 11:25
 */

class Controllers
{
    public $request;
    public $vars = array();

    function __construct()
    {

    }

    public function render($view){
        extract($this->vars);
        $view = APP.'views/'.$view.'.php';

        include_once $view;
    }

    public function set($key, $value){
        $this->vars[$key] = $value;
    }

}
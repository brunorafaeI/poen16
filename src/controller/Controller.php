<?php

namespace src\controller;

Abstract class Controller {

    /*
    * Display the requested page with the requested parameters
    * @param string $name
    * @param array/bool $params
    */
    public function render($name, $params = false) {

        $name = str_replace(":", _DS_, $name);
        $thePath = _VIEWPATH_ ._DS_.'template'._DS_. $name;
        if (file_exists($thePath)) {
            if ($params) {
                foreach ($params as $key => $value) {
                    $$key = $value;
                }
            }
            include_once $thePath;
        } else {
            // Default action
            echo "Page not found. 404 error";
        }
    }

    abstract public function indexAction();


}

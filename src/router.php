<?php

namespace src;

use src\controller\DefaultController;
use src\controller\AdminController;
use src\controller\ProductController;

class Router
{

    /**
     * @var DefaultController
     */
    private $defaultController;
    private $adminController;
    private $productController;


    public function __construct()
    {

        $this->defaultController = new DefaultController();
        $this->adminController = new AdminController();
        $this->productController = new ProductController();

    }


    public function routeRequest()
    {

        if (!empty($_GET['controller']) && !empty($_GET['action'])) {

            foreach ($_GET as $key => $value) :
                $$key = htmlspecialchars(ltrim($value));
            endforeach;

            $path = _CTRLPATH_.ucfirst($controller).'Controller.php';
            $action = $action.'Action';
            $controller = $controller.'Controller';

            if(file_exists($path)) {

                //We get the object instanced in the __consctruct();
                $myController = $this->$controller;

                if(method_exists($myController,$action)){
                    $myController->$action();
                }
                else{
                    $this->defaultController->indexAction();
                    echo 'Action not found.';
                }
            }
            else{
                $this->defaultController->indexAction();
                echo 'Controller not exists.';
            }
        }
        else{
            $this->defaultController->indexAction();

        }
    }



}

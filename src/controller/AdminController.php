<?php

namespace  src\controller;


/**
 * Class AdminController
 * @package src\controller
 */
Class AdminController extends Controller{


    public function indexAction()
    {

        $this->render('admin:index.php');
    }




}

<?php

namespace  src\controller;

use src\model\UserModel;


Class DefaultController extends Controller {
    private $userM;

    public function __construct()
    {
        $this->userM = new UserModel();
    }

    public function indexAction()
    {

        $this->render('default:index.php');
    }

    public function verifyLoginAction()
    {
        var_dump($_POST);
        if ($_SERVER['REQUEST_METHOD'] == 'POST') :
            foreach ($_POST as $key => $value) :
              $$key = htmlspecialchars(ltrim($value));

            endforeach;

            $result  = $this->userM->verifyLogin($username, $password);

            if (!$result) :
                echo 'Username or Password incorrect.';
            else :
                $_SESSION['user_nom']   = $result->user_nom;
                $_SESSION['user_email'] = $result->user_email;
                echo 'done';
            endif;

        endif;

    }


}

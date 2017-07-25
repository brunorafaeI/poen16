<?php

namespace  src\controller;

use src\model\UserModel;


Class DefaultController extends Controller {
    private $user;

    public function __construct()
    {
        $this->user = new UserModel();
    }

    public function indexAction()
    {

        $this->render('default:index.php');
    }

    public function verifyLoginAction()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') :
            foreach ($_POST as $key => $value) :
              $$key = htmlspecialchars(ltrim($value));

            endforeach;

            $params = array(
                $username,
                md5($password),
            );

            $result  = $this->user->verifyLogin($params);

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

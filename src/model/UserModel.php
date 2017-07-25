<?php

namespace src\model;

use src\model\Model;

Class UserModel extends Model {

    public function verifyLogin($user, $pass)
    {
        $params = array(
            $user,
            md5($pass),
        );

        $sql = 'SELECT user_login, user_pass, user_nom, user_email FROM user '.
                'WHERE user_login=? AND user_pass=?';

        $stmt = $this->executeRequest($sql, $params);

        return $stmt->fetch(\PDO::FETCH_OBJ);


    }

}

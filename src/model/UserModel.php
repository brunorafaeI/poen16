<?php

namespace src\model;

use src\model\Model;

Class UserModel extends Model {

    public function verifyLogin($params)
    {

        $sql = 'SELECT user_login, user_pass, user_nom, user_email FROM user_project '.
                'WHERE user_login=? AND user_pass=?';

        $stmt = $this->executeRequest($sql, $params);
        return $stmt->fetch(\PDO::FETCH_OBJ);

    }

}

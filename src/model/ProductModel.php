<?php
/**
 * Created by PhpStorm.
 * User: POE-JAVA-09
 * Date: 25/07/2017
 * Time: 13:36
 */

namespace src\model;


class ProductModel extends Model
{

    public function listProduct()
    {
        $sql = 'SELECT prod_id, prod_name, prod_desc, prod_price, prod_quantity FROM project.product_project ';

        $stmt = $this->executeRequest($sql);
        $data = array();

        while($result = $stmt->fetch(\PDO::FETCH_OBJ)) :
            $data[] = array(
                "prod_id"          => $result->prod_id,
                "prod_name"        => $result->prod_name,
                "prod_desc"        => $result->prod_desc,
                "prod_price"       => number_format($result->prod_price,2,',', '.'),
                "prod_quantity"    => $result->prod_quantity
            );
        endwhile;

        die(json_encode($data));

    }

    public function addProduct($params)
    {

        $sql =  'INSERT INTO product_project (prod_name, prod_desc, prod_price, prod_quantity)'.
                ' VALUES (?,?,?,?)';

        return  $this->executeRequest($sql, $params);

    }

    public function deleteProduct($params)
    {
        $sql = 'DELETE FROM product_project WHERE prod_id = ?';

        $result = $this->executeRequest($sql, $params);

        if ($result) :
            echo "Product deleted successfuly";
        else :
            echo "Unable to delete this product";
        endif;
    }

    public function updateProduct($params)
    {
        $sql = 'UPDATE product_project SET prod_name=?, prod_desc=?, prod_price=?, prod_quantity=? WHERE prod_id=?';
        $result = $this->executeRequest($sql, $params);

        die("Product updated successfully!");
    }

}
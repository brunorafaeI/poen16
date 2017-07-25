<?php
/**
 * Created by PhpStorm.
 * User: POE-JAVA-09
 * Date: 25/07/2017
 * Time: 12:23
 */

namespace src\controller;

use src\model\ProductModel;


class ProductController extends Controller
{
    private $product;

    public function __construct()
    {
        $this->product = new ProductModel();
    }

    public function indexAction()
    {
        // TODO: Implement indexAction() method.
    }

    public function listProductAction()
    {

        $this->product->listProduct();
    }

    public function addProductAction()
    {
        $data = json_decode(file_get_contents("php://input"));
        if ($data) :

            $params = array(
                htmlentities(ltrim($data->prod_name)),
                htmlentities(ltrim($data->prod_desc)),
                $data->prod_price,
                $data->prod_quantity
            );


            $result = $this->product->addProduct($params);

            if ($result) :
                echo 'Product added successfuly';
            else :
                echo 'Unable to add this product';
            endif;

        endif;

        return false;
    }

    public function deleteProductAction()
    {
        $data = json_decode(file_get_contents("php://input"));

        $params = array(
            $data->prod_id
        );

        $this->product->deleteProduct($params);
    }

    public function editProductAction()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST'):
            die(json_encode(str_replace(',','',str_replace('.','',$_POST['product']))));
        endif;
    }

    public function updateProductAction()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST'):
            foreach ($_POST as $key => $value):
                $$key = htmlspecialchars(ltrim($value));
            endforeach;

            $params = array(
                $prod_name,
                $prod_desc,
                $prod_price,
                $prod_quantity,
                $prod_id
            );

            $this->product->updateProduct($params);

        endif;

        return false;
    }

}
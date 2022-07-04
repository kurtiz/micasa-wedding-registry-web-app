<?php

namespace App\Controllers;

use App\Models\ProductsModel;
use CodeIgniter\Controller;

class Cart extends Controller {

    private $productsModel;
    public function __construct(){
        $this->productsModel = new ProductsModel();
    }

    public function index(){
        $data["products"] = $this->productsModel->getProducts(STORE_ID);
//        echo "<pre>";
//        var_dump($data['products']);
//        echo "</pre>";
//        exit;
        if (session()->has("cart")){
            $cart = session()->get("cart");
            foreach ($cart as $item){
                foreach ($data['products'] as $product){
                    if ($product["product_id"] == $item["id"]) {
                        $productQuantity = (int)$product["quantity"] - $item["quantity"];
                        if($productQuantity < 1){
                            "";
                        }
                    }
                }
            }
        }
        exit;
        return view("cart", $data);
    }

    public function send(){
        if ($this->request->getMethod() == "post"){
            $_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            session()->set("cart", $_POST);
            return json_encode(["msg" => "success"]);
        }
        return json_encode(["msg" => "failed"]);
    }

}
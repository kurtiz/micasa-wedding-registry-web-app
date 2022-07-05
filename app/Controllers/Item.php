<?php

namespace App\Controllers;

use App\Models\ProductsModel;
use CodeIgniter\Controller;

class Item extends Controller {
    public $productModel;

    public function __construct() {
        $this->productModel = new ProductsModel();
    }

    public function index(){

        return redirect()->to(base_url());
    }

    public function quantity($id){
        $data = $this->productModel->getProductQuantity(STORE_ID, $id);
        return json_encode($data);
    }
}
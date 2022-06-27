<?php

namespace App\Controllers;
use App\Models\ProductsModel;
class Home extends BaseController {

    public $productsModel;

    public function __construct() {
        $this->productsModel = new ProductsModel();
        helper("cookie");
    }

    public function index() {

        $data["products"] = $this->productsModel->getProducts(STORE_ID);

        set_cookie("products", json_encode($data['products']), 172800);
		return view('home', $data);
	}
}

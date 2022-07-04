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
		return view('home', $data);
	}
}

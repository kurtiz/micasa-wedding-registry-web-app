<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Cart extends Controller {

    public function index(){
        return view("cart");
    }
}
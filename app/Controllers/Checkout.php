<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Checkout extends Controller {

    public function index(){
        return view("checkout");
    }
}
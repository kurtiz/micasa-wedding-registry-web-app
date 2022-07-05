<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class ThankYou extends Controller {

    public function index(){

        return view("after_checkout");
    }
}
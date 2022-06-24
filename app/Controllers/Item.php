<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Item extends Controller {

    public function index(){

        return view("item");
    }
}
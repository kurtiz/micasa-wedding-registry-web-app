<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Shop extends Controller {

    public function index(){
        return redirect()->to(base_url());
    }
}
<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Wishlist extends Controller {

    public function index(){
        return redirect()->to(base_url());
    }
}
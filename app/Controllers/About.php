<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class About extends Controller {

    public function index(){

        return redirect()->to(base_url());
    }
}
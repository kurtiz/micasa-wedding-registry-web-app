<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Login extends Controller {

    public function index(){

        return redirect()->to(base_url());
    }
}
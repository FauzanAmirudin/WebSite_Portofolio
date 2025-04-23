<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Single extends BaseController
{
    public function index()
    {
        return view('blog/single');
    }
}

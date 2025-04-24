<?php

namespace App\Controllers;
use App\Models\BlogModel;
use App\Controllers\BaseController;
class Home extends BaseController
{
    protected $blogModel;

    public function __construct()
    {
        $this->blogModel = new BlogModel();
    }

    public function index(): string
    {
        $data['blogs'] = $this->blogModel->findAll();
        return view('index', $data);
        return view('index');
    }
    
}

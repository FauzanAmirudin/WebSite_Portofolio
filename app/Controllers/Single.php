<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BlogModel;
use CodeIgniter\HTTP\ResponseInterface;

class Single extends BaseController
{
    public function index()
    {
        return view('blog/single');
    }

    public function single($id)
    {
        $model = new BlogModel();
        $data['blog'] = $model->find($id);

        if (!$data['blog']) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Blog dengan ID $id tidak ditemukan.");
        }

        return view('blog/single', $data);
    }
}

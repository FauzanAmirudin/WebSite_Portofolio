<?php

namespace App\Controllers;
use App\Models\BlogModel;

class Detail extends BaseController
{
    public function detail()
    {
        $model = new BlogModel();
        $data['blog'] = $model->findAll(); // ambil semua data blog

        return view('blog/detail', $data); // pastikan path dan nama view-nya sesuai
    }

    public function index()
    {
        $model = new BlogModel();
        $data['blog'] = $model->findAll(); // ambil semua blog

        return view('detail', $data); // detail.php menampilkan semua blog
    }

    public function show($id)
    {
        $model = new BlogModel();
        $data['blog'] = $model->find($id); // ambil blog berdasarkan ID

        return view('single', $data); // single.php menampilkan satu blog
    }
}

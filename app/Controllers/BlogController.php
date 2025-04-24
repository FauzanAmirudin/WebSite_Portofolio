<?php

namespace App\Controllers;

use App\Models\BlogModel;
use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class BlogController extends BaseController
{
    protected $blog;

    public function __construct()
    {
        $this->blog = new BlogModel();
    }

    public function index()
    {
        $data['blogs'] = $this->blog->findAll();
        return view('admin/blog/index', $data);
    }

    public function create()
    {
        return view('admin/blog/create');
    }

    public function store()
    {
        $file = $this->request->getFile('gambar');
        $gambarName = $file->getRandomName();
        $file->move('uploads', $gambarName);

        $this->blog->save([
            'judul' => $this->request->getPost('judul'),
            'isi'   => $this->request->getPost('isi'),
            'gambar'=> $gambarName,
        ]);

        return redirect()->to('/admin/blog');
    }

    public function edit($id)
    {
        $data['blog'] = $this->blog->find($id);
        return view('admin/blog/edit', $data);
    }

    public function update($id)
    {
        $file = $this->request->getFile('gambar');
        if ($file->isValid() && !$file->hasMoved()) {
            $gambarName = $file->getRandomName();
            $file->move('uploads', $gambarName);
        } else {
            $gambarName = $this->request->getPost('gambar_lama');
        }

        $this->blog->update($id, [
            'judul' => $this->request->getPost('judul'),
            'isi'   => $this->request->getPost('isi'),
            'gambar'=> $gambarName,
        ]);

        return redirect()->to('/admin/blog');
    }

    public function show($id)
{
    $model = new BlogModel();
    $blog = $model->find($id);

    if (!$blog) {
        throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
    }

    return view('single', ['blog' => $blog]);
}

    public function delete($id)
    {
        $this->blog->delete($id);
        return redirect()->to('/admin/blog');
    }
}

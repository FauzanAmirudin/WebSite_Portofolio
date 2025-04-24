<?php
namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\BlogModel;

class Blog extends BaseController
{
    protected $blogModel;

    public function __construct()
    {
        $this->blogModel = new BlogModel();
    }

    public function index()
    {
        helper('text');

        $data['blogs'] = $this->blogModel->findAll();
        return view('admin/blog/index', $data);
    }

    public function create()
    {
        return view('admin/blog/create');
    }

    public function store()
    {
        $data = $this->request->getPost();
        $img = $this->request->getFile('gambar');

        if ($img->isValid() && !$img->hasMoved()) {
            $newName = $img->getRandomName();
            $img->move('uploads', $newName);
            $data['gambar'] = $newName;
        }

        $this->blogModel->save([
            'judul' => $data['judul'],
            'isi'   => $data['isi'],
            'gambar'=> $data['gambar'] ?? null
        ]);

        return redirect()->to('/admin/blog');
    }

    public function edit($id)
    {
        $data['blog'] = $this->blogModel->find($id);
        return view('admin/blog/edit', $data);
    }

    public function update($id)
    {
        $data = $this->request->getPost();
        $img = $this->request->getFile('gambar');

        if ($img && $img->isValid() && !$img->hasMoved()) {
            $newName = $img->getRandomName();
            $img->move('uploads', $newName);
            $data['gambar'] = $newName;
        }

        $this->blogModel->update($id, $data);
        return redirect()->to('/admin/blog');
    }

    public function delete($id)
    {
        $this->blogModel->delete($id);
        return redirect()->to('/admin/blog');
    }
}

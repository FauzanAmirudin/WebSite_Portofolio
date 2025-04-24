<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BlogModel;
use CodeIgniter\HTTP\ResponseInterface;

class AdminController extends BaseController
{
    public function index()
    {
        $model = new BlogModel();
        $data['blogs'] = $model->findAll();
        return view('admin/blog/index', $data);
    }

    public function create()
    {
        return view('admin/blog/create');
    }

    public function store()
    {
        $model = new BlogModel();
        $gambar = $this->request->getFile('gambar');
        $gambarName = $gambar->getRandomName();
        $gambar->move('uploads/', $gambarName);

        $model->save([
            'judul' => $this->request->getPost('judul'),
            'isi' => $this->request->getPost('isi'),
            'gambar' => $gambarName
        ]);

        return redirect()->to('/admin');
    }

    public function edit($id)
    {
        $model = new BlogModel();
        $data['blog'] = $model->find($id);
        return view('admin/blog/edit', $data);
    }

    public function update($id)
{
    $model = new BlogModel();
    $blog = $model->find($id);

    if (!$blog) {
        return redirect()->to('/admin')->with('error', 'Data tidak ditemukan');
    }

    $validation = \Config\Services::validation();

    $rules = [
        'judul' => 'required',
        'isi' => 'required',
    ];

    if (!$this->validate($rules)) {
        return redirect()->back()->withInput()->with('errors', $validation->getErrors());
    }

    $gambar = $this->request->getFile('gambar');
    $data = [
        'judul' => $this->request->getPost('judul'),
        'isi'   => $this->request->getPost('isi'),
    ];

    if ($gambar && $gambar->isValid() && !$gambar->hasMoved()) {
        // Hapus gambar lama jika ada
        if (!empty($blog['gambar']) && file_exists('uploads/' . $blog['gambar'])) {
            unlink('uploads/' . $blog['gambar']);
        }

        $namaGambar = $gambar->getRandomName();
        $gambar->move('uploads', $namaGambar);
        $data['gambar'] = $namaGambar;
    }

    $model->update($id, $data);

    return redirect()->to('/admin')->with('success', 'Data berhasil diperbarui');
}


    public function delete($id)
    {
        $model = new BlogModel();
        $model->delete($id);
        return redirect()->to('/admin');
    }
}

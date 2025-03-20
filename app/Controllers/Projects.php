<?php

namespace App\Controllers;

// Mendeklarasikan kelas 'Projects' yang merupakan turunan dari 'BaseController'
class Projects extends BaseController
{
    // Metode 'projects' yang mengembalikan tampilan (view) bernama 'Projects/projects'
    public function projects(): string
    {
        return view('Projects/projects'); // Memuat tampilan 'Projects/projects' dan mengembalikannya sebagai string
    }
}

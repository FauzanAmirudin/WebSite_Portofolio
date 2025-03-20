<?php

// Mendeklarasikan namespace untuk controller ini, yaitu App\Controllers
namespace App\Controllers;

// Mendeklarasikan kelas 'resume' yang merupakan turunan dari 'BaseController'
class resume extends BaseController
{
    // Metode 'resume' yang mengembalikan tampilan (view) bernama 'Resume/resume'
    public function resume(): string
    {
        return view('Resume/resume'); // Memuat tampilan 'Resume/resume'
    }
}

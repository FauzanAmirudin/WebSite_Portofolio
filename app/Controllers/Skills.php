<?php

namespace App\Controllers;

// Mendeklarasikan kelas 'Skills' yang merupakan turunan dari 'BaseController'
class Skills extends BaseController
{
    // Metode 'skills' yang mengembalikan tampilan (view) bernama 'Skills/skills'
    public function skills(): string
    {
        return view('Skills/skills'); // Memuat tampilan 'Skills/skills' 
    }
}

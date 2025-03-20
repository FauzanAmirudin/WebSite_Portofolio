<?php

namespace App\Controllers;

// Mendeklarasikan kelas 'About' yang merupakan turunan dari 'BaseController'
class About extends BaseController
{
    // Metode 'about' yang mengembalikan tampilan (view) bernama 'About/about'
    public function about(): string
    {
        return view('About/about'); // Memuat tampilan 'About/about' 
    }
}

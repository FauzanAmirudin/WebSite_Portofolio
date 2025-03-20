<?php

namespace App\Controllers;

// Mendeklarasikan kelas 'Contact' yang merupakan turunan dari 'BaseController'
class Contact extends BaseController
{
    // Metode 'contact' yang mengembalikan tampilan (view) bernama 'Contact/contact'
    public function contact(): string
    {
        return view('Contact/contact'); // Memuat tampilan 'Contact/contact' 
    }
}

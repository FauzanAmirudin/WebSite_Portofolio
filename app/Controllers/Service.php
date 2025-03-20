<?php

namespace App\Controllers;

// Mendeklarasikan kelas 'Service' yang merupakan turunan dari 'BaseController'
class Service extends BaseController
{
    // Metode 'service' yang mengembalikan tampilan (view) bernama 'Service/service'
    public function service(): string
    {
        return view('Service/service'); // Memuat tampilan 'Service/service' 
    }
}

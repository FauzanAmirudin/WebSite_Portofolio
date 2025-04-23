<?php

namespace App\Controllers;
use App\Models\BlogModel;

class Blog extends BaseController
{
    public function blog(): string
    {
        return view('blog/single');
    }
}

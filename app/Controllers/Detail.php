<?php

namespace App\Controllers;

class Detail extends BaseController
{
    public function detail(): string
    {
        return view('blog/detail');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controllers
{
    public function aboutUs() {
        return redirect()->to('https://www.educastudio.com/about-us');
    }
}

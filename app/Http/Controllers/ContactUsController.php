<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactUsController extends Controllers
{
    public function index()
    {
        return redirect("https://www.educastudio.com/contact-us");
    }
}
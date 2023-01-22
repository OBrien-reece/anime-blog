<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function show_about() {
        return view('pages.about');
    }

    public function contact_us() {
        return view('pages.contact_us');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
     /**
     * Display content of privacy policy page.
     */
    public function privacyPolicy()
    {
        return view('pages.privacyPolicy');
    }
}

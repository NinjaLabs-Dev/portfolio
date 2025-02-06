<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;

class TermsOfSaleController extends Controller
{
    public function index()
    {
        return view('pages.terms-of-sale');
    }
}

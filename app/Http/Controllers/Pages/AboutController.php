<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Support\Carbon;

class AboutController extends Controller {
    public function index() {
        $birthday = Carbon::createFromDate(2003, 8, 21);

        return view('pages.about')
            ->with('age', $birthday->age);
    }
}

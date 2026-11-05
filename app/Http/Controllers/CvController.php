<?php

namespace App\Http\Controllers;

use App\Models\Cv;

class CvController extends Controller
{
    public function index(Cv $cv)
    {
        $cvPath = storage_path('app/CV.pdf');
        if (!file_exists($cvPath)) {
            abort(404);
        }

        return response()->file($cvPath);
    }
}

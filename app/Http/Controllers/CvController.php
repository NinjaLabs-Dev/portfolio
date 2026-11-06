<?php

namespace App\Http\Controllers;

use App\Models\Cv;
use App\Models\CvVisit;
use Illuminate\Http\Request;

class CvController extends Controller
{
    public function index(Request $request, Cv $cv)
    {
        $cvPath = storage_path('app/CV.pdf');
        if (!file_exists($cvPath)) {
            abort(404);
        }

        if ($request->isMethod('GET')) {
            CvVisit::create(['cv_id' => $cv->id]);
        }

        return response()->file($cvPath);
    }
}

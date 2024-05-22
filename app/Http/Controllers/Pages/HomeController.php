<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\Project;

class HomeController extends Controller {
    public function index() {
        $recentProject = Project::query()
            ->orderBy('order')
            ->limit(5)
            ->get()
            ->shuffle()
            ->first();

        return view('pages.home')
            ->with('recentProject', $recentProject);
    }
}

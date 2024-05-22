<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\Experience;
use App\Models\Project;

class ExperienceController extends Controller {
    public function index() {
        $experiences = Experience::query()
            ->orderBy('order')
            ->get();

        $projects = Project::query()
            ->orderBy('order')
            ->get();

        return view('pages.experience')
            ->with('experiences', $experiences)
            ->with('projects', $projects);
    }
}

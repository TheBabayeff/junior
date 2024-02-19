<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Partner;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::orderBy('created_at' , 'desc')->paginate(6);
        $partners = Partner::all();

        return view('frontend.projects.index', compact('projects','partners'));
    }
}

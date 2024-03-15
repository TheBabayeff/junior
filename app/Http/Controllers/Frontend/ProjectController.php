<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\News;
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

    public function show($slug)
    {
        $partners = Partner::all();
        $projects = Project::inRandomOrder()->limit(3)->get();
        $news = News::inRandomOrder()->limit(3)->get();
        $projectSingle = Project::where('slug', $slug)->firstOrFail();

        $prevPost = Project::where('id', '<', $projectSingle->id)->orderBy('id', 'desc')->first();
        $nextPost = Project::where('id', '>', $projectSingle->id)->orderBy('id', 'asc')->first();

        return view('frontend.projects.single', compact('projectSingle', 'prevPost' , 'nextPost','partners','projects','news'));



    }
}

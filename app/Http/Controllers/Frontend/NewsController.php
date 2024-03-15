<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\Partner;
use App\Models\Project;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $partners = Partner::all();
        $news     = News::with('author')->paginate(6);
        return view('frontend.news.index',compact('news', 'partners'));
    }

    public function show($slug)
    {
        $partners = Partner::all();
        $projects = Project::inRandomOrder()->limit(3)->get();
        $news = News::inRandomOrder()->limit(3)->get();

        $newsSingle = News::with('author')->where('slug', $slug)->firstOrFail();

        $prevPost = News::where('id', '<', $newsSingle->id)->orderBy('id', 'desc')->first();
        $nextPost = News::where('id', '>', $newsSingle->id)->orderBy('id', 'asc')->first();

        return view('frontend.news.single', compact('newsSingle', 'prevPost' , 'nextPost','partners','projects', 'news'));



    }
}

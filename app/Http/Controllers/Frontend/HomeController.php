<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Models\News;
use App\Models\Partner;
use App\Models\Team;
use App\Models\Vacancy;
use App\Models\Young;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $partners = Partner::all();
        $news     = News::with('author')->inRandomOrder()->limit('3')->get();
        $youngs   = Young::inRandomOrder()->limit('10')->get();
        $teams    = Team::all();
        $vacancies = Vacancy::where('is_visible', true)->get();
        $galleries = Gallery::inRandomOrder()->limit('10')->get();

        return view('frontend.index', compact('partners','news', 'youngs','teams','vacancies','galleries'));
    }

    public function about()
    {
        $partners = Partner::inRandomOrder()->take(10)->get();
        $teams    = Team::all();
        return view('frontend.about' , compact('partners','teams'));
    }

    public function contact()
    {
        return view('frontend.contact');
    }
    public function ourTeam()
    {
        return view('frontend.our-team');
    }
}

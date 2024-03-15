<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Models\Partner;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {

        $galleries = Gallery::orderBy('created_at' , 'desc')->paginate(9);

        return view('frontend.galleries.index', compact('galleries'));
    }

    public function show($id)
    {

        $gallerySingle = Gallery::findOrFail($id);
        $galleries     = Gallery::inRandomOrder()->limit(5)->get();
        $partners      = Partner::all();

        return view('frontend.galleries.single', compact('gallerySingle', 'galleries', 'partners'));



    }
}

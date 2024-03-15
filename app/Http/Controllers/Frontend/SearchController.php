<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\Partner;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        // Validasiya qaydalarını təyin edin
        $validated = $request->validate([
            'search' => 'nullable|string|max:255',
        ]);

        // Validasiya edilmiş dəyəri əldə edin
        $search = $validated['search'] ?? '';

        $partners = Partner::all();

        // Əgər axtarış dəyəri boşdursa, boş bir collection qaytarır
        if (empty($search)) {
            $searchNews = collect(); // Boş bir Laravel Collection yaradır
            return view('frontend.components.search', compact('searchNews', 'partners'));
        }

        // Axtarış dəyəri boş deyilsə, axtarışı icra edin
        $searchNews = News::query()
            ->where('title', 'LIKE', "%{$search}%")
            ->orWhere('slug', 'LIKE', "%{$search}%")
            ->orWhere('content', 'LIKE', "%{$search}%")
            ->paginate(6)
            ->appends(['search' => $search]);;


        return view('frontend.components.search', compact('searchNews', 'partners'));
    }
}

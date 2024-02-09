<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\Vacancy;
use App\Models\Volunteer;
use Illuminate\Http\Request;

class VacancyController extends Controller
{
    public function index()
    {

    }

    public function show($id)
    {
        $vacancy  = Vacancy::where('id', $id)->firstOrFail();
        $news     = News::with('author')->inRandomOrder()->limit(3)->get();

        return view('frontend.vacancies.single' , compact('vacancy','news'));
    }

    public function volunteer()
    {
        return view('frontend.vacancies.volunteer');
    }
    public function sendResume(Request $request)
    {
        dd($request);
    }

    public function volunteerCv(Request $request)
    {


        // Validate input data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:15',
            //'pdfCV' => 'required|mimes:pdf', // |max:2048 maksimum 2MB pdf faylı
            'description' => 'nullable|string|max:1000',
        ]);
        // Save the CV to the database
        $cv = new Volunteer();
        $cv->name = $validatedData['name'];
        $cv->email = $validatedData['email'];
        $cv->phone = $validatedData['phone'];
        $cv->description = $validatedData['description'];

        // Save the uploaded PDF CV
        $pdfCV = $request->file('pdfCV');
        $pdfFileName = time() . '_' . $pdfCV->getClientOriginalName();
        $pdfCV->storeAs('volunteers-cv', $pdfFileName, 'public'); // volunteers-cv adlı qovluğa yaddaşda saxla

        $cv->pdfCV = $pdfFileName;
        $cv->save();

        return redirect()->back()->with('succcess', 'Successfull send');
    }


    public function downloadCv($id)
    {
        $record = Volunteer::findOrFail($id);
        $pdfPath = storage_path("app/public/volunteers-cv/{$record->pdfCv}");

        return response()->download($pdfPath, 'cv.pdf');
    }
}

<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Anket;
use App\Models\News;
use App\Models\Partner;
use App\Models\Vacancy;
use App\Models\Volunteer;
use Illuminate\Http\Request;

class VacancyController extends Controller
{
    public function index()
    {
        $vacancies = Vacancy::orderBy('created_at' , 'desc')->paginate(3);
        $partners = Partner::all();

        return view('frontend.vacancies.index', compact('vacancies','partners'));
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
        // Validate input data
        $validatedData = $request->validate([
            'vacancy_id' => 'required|integer',
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'photo' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'pdf' => 'required|mimes:pdf|max:2048', // |max:2048 maksimum 2MB pdf faylı
            'description' => 'nullable|string|max:1000',
        ]);
        // Save the CV to the database
        $cv = new Anket();
        $cv->vacancy_id = $validatedData['vacancy_id'];
        $cv->name = $validatedData['name'];
        $cv->photo = $validatedData['photo'];
        $cv->phone = $validatedData['phone'];
        $cv->description = $validatedData['description'];

        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $photoFileName = time() . '_' . $photo->getClientOriginalName();
            $photo->storeAs('ankets-photos', $photoFileName, 'public');

            $cv->photo = 'ankets-photos/' . $photoFileName; // Modeldə şəkilin adını saxla
        }

        // Save the uploaded PDF CV
        $pdf = $request->file('pdf');
        $pdfFileName = time() . '_' . $pdf->getClientOriginalName();
        $pdf->storeAs('ankets-pdf', $pdfFileName, 'public');

        $cv->pdf = 'ankets-pdf/' . $pdfFileName;
        $cv->save();

        return redirect()->route('success')->with('succcess', 'Successfull send');
    }

    public function volunteerCv(Request $request)
    {


        // Validate input data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:15',
            'pdfCV' => 'required|mimes:pdf', // |max:2048 maksimum 2MB pdf faylı
            'description' => 'nullable|string|max:1000',
            'is_practice' => 'required|in:0,1',

        ]);
        // Save the CV to the database
        $cv = new Volunteer();
        $cv->name = $validatedData['name'];
        $cv->email = $validatedData['email'];
        $cv->phone = $validatedData['phone'];
        $cv->is_practice = $validatedData['is_practice'];
        $cv->description = $validatedData['description'];

        // Save the uploaded PDF CV
        $pdfCV = $request->file('pdfCV');
        $pdfFileName = time() . '_' . $pdfCV->getClientOriginalName();
        $pdfCV->storeAs('volunteers-cv', $pdfFileName, 'public'); // volunteers-cv adlı qovluğa yaddaşda saxla

        $cv->pdfCV = $pdfFileName;
        $cv->save();

        return redirect()->route('success')->with('succcess', 'Successfull send');
    }


    public function downloadCv($id)
    {
        $record = Volunteer::findOrFail($id);
        $pdfPath = storage_path("app/public/volunteers-cv/{$record->pdfCv}");

        return response()->download($pdfPath, 'cv.pdf');
    }
}

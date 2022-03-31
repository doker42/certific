<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use App\Models\Curse;
use Illuminate\Http\Request;
use PDF;

class MainController extends Controller
{
    public function index()
    {
        return view('start');
    }

    public function form()
    {
        return view('form', ['curses' => Curse::CURSES]);
    }

    public function create(Request $request)
    {
        $validated = $request->validate([
            'num' => 'required|unique:certificates|max:10',
            'first_name' => 'required|max:20|string',
            'surname' => 'required|max:20|string',
            'curse' => 'required|max:255|string',
            'graduated' => 'required:date'
        ]);

        $input = [
            'num' => $validated['num'],
            'full_name' => $validated['surname'] . " " . $validated['first_name'],
            'surname' => 'required|max:20|string',
            'curse' => $validated['curse'],
            'graduated' => $validated['graduated'],
        ];

        $certificate = Certificate::create($input);

        return redirect('/load-page/'.$certificate->id);
    }

    public function loadPage($certificate)
    {
        return view('load', ['certificate' => $certificate]);
    }

    public function loadPdf($certificate)
    {
        $data = [
            'certificate' => Certificate::find($certificate),
            'link' => Certificate::CERT_LINK
        ];

        $pdf = PDF::loadView('pdf.certificate', $data);

        return $pdf->download("certificate.pdf");
    }

    public function foo()
    {
        retutn 'FOO!';
    }
}

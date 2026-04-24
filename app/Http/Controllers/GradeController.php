<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GradeController extends Controller
{
    public function index()
    {
        $grades = Grade::where('user_id', Auth::id())->get();
        return view('grades.index', compact('grades'));
    }

    public function store(Request $request)
    {
        Grade::create([
            'user_id'     => Auth::id(),
            'subject'     => $request->subject,
            'note'        => $request->note,
            'coefficient' => $request->coefficient,
            'absences'    => $request->absences ?? 0,
        ]);

        return redirect('/grades')->with('success', 'Note ajoutée !');
    }
}
<?php

namespace App\Http\Controllers;

use App\Models\StudyGroup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudyGroupController extends Controller
{
    public function index()
    {
        $groups = StudyGroup::all();
        return view('groups.index', compact('groups'));
    }

    public function store(Request $request)
    {
        StudyGroup::create([
            'name'       => $request->name,
            'subject'    => $request->subject,
            'schedule'   => $request->schedule,
            'type'       => $request->type,
            'creator_id' => Auth::id(),
        ]);

        return redirect('/groups')->with('success', 'Groupe créé !');
    }
}
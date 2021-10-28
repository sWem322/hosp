<?php

namespace App\Http\Controllers;

use App\Models\ContactModel;
use Illuminate\Http\Request;

class DoctorsController extends Controller
{
    public function doctors()
    {
        return view('doctors');
    }
    public function doctors_sign(Request $request) {
        $valid = $request->validate ([
            'docname' => 'required|min:2|max:20',
            'docSecondName' => 'required|min:1|max:100',
            'date' => 'required',
            'datetime' => 'required',
            'nom' => 'required|min:5|max:15',
        ]);
        $doctors = new ContactModel();
        $doctors-> name = $request->input('docname');
        $doctors-> secondName = $request->input('docSecondName');
        $doctors-> date = $request->input('date');
        $doctors-> time = $request->input('datetime');
        $doctors-> number = $request->input('nom');

        $doctors->save();

        
        return redirect()->route ('doctors');
    }
}

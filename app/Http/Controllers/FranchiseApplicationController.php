<?php

namespace App\Http\Controllers;

use App\Models\FranchiseApplication;
use Illuminate\Http\Request;

class FranchiseApplicationController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'full_name' => 'required',
            'email' => 'required|email',
            'contact' => 'required',
            'location' => 'required',
            'document' => 'nullable|file|mimes:pdf,jpg,png|max:2048'
        ]);

        if ($request->hasFile('document')) {
            $data['document'] = $request->file('document')->store('applications', 'public');
        }

        FranchiseApplication::create($data);

        return back()->with('success', 'Application submitted successfully!');
    }

    public function index()
    {
        $applications = FranchiseApplication::latest()->paginate(10);
        return view('admin.applications', compact('applications'));
    }
}

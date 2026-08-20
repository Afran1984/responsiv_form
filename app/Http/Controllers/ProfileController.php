<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function create()
    {
        return view('profiles.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:profiles,email',
            'age' => 'required|numeric',
            'address' => 'required',
            'phone' => 'required',
            'nid' => 'required',
        ]);

        Profile::create($request->all());

        return redirect()->route('profiles.index')->with('success', 'প্রোফাইল সফলভাবে তৈরি হয়েছে!');
    }

    public function index()
    {
        $profiles = Profile::latest()->get();
        return view('profiles.index', compact('profiles'));
    }
}
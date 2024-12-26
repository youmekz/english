<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DictionaryVerb;
use Illuminate\Http\Request;

class DictionaryController extends Controller
{
    public function index()
    {
        return view('components.pages.admin');
    }

    public function store(Request $request)
    {
        $request->validate([
            'russian' => 'required|string|max:255',
            'simple' => 'required|string|max:255',
            'complex' => 'required|string|max:255',
        ]);

        DictionaryVerb::create([
            'russian' => $request->russian,
            'simple' => $request->simple,
            'complex' => $request->complex,
        ]);

        return redirect()->route('admin')->with('success', 'Глагол добавлен!');
    }
}

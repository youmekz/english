<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DictionaryVerb;
use App\Models\DictionaryNoun;
use Illuminate\Http\Request;

class DictionaryController extends Controller
{
    public function showDictionary() {
      $verbs = DictionaryVerb::all();
      $nouns = DictionaryNoun::all();

      return view('components.pages.dictionary', compact('verbs', 'nouns'));
    }

    public function addVerb()
    {
        return view('components.admin.addverb');
    }

    public function storeVerb(Request $request)
    {
        if ($request['key'] !== config('app.admin_key')) {
          exit();
        }

        $request->validate([
            'russian' => 'required|string|max:255',
            'simple' => 'required|string|max:255',
            'complex' => 'nullable|string|max:255',
        ]);

        DictionaryVerb::create([
            'russian' => $request->russian,
            'simple' => $request->simple,
            'complex' => $request->complex,
        ]);


        return redirect()->route('admin.addverb')->with('success', 'Verb added!');
    }

    public function addNoun()
    {
        return view('components.admin.addnoun');
    }

    public function storeNoun(Request $request)
    {
        if ($request['key'] !== config('app.admin_key')) {
          exit();
        }

        $request->validate([
            'russian' => 'required|string|max:255',
            'translate' => 'required|string|max:255',
        ]);

        DictionaryNoun::create([
            'russian' => $request->russian,
            'translate' => $request->translate,
        ]);

        return redirect()->route('admin.addnoun')->with('success', 'Noun added!');
    }
}

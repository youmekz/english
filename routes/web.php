<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\Admin\DictionaryController;
use App\Http\Middleware\CheckAdminKey;

use App\View\Components\Pages\Dictionary;



Route::get('/', function () {
    return view('components.index');
});

Route::get('/pages/lessons', function () {
  return view('components.pages.lessons');
});

Route::get('/pages/phrases', [DictionaryController::class, 'showPhrases'])->name('components.pages.phrases');

Route::get('/pages/dictionary', [DictionaryController::class, 'showDictionary'])->name('components.pages.dictionary');

Route::middleware([CheckAdminKey::class])->group(function () {
  Route::get('/admin', function (Request $request) {
      return view('components.admin.admin', ['key' => $request->all()]);
  });
});

Route::get('/admin/verbs', [DictionaryController::class, 'addVerb'])->name('admin.addverb');
Route::post('/admin/verbs', [DictionaryController::class, 'storeVerb']);

Route::get('/admin/nouns', [DictionaryController::class, 'addNoun'])->name('admin.addnoun');
Route::post('/admin/nouns', [DictionaryController::class, 'storeNoun']);

Route::get('/admin/phrases', [DictionaryController::class, 'addPhrases'])->name('admin.addphrases');
Route::post('/admin/phrases', [DictionaryController::class, 'storePhrases']);
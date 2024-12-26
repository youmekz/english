<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\Admin\DictionaryController;
use App\Http\Middleware\CheckAdminKey;

Route::get('/', function () {
    return view('components.index');
});

Route::get('/pages/lessons', function () {
  return view('components.pages.lessons');
});

Route::get('/pages/tests', function () {
  return view('components.pages.tests');
});

Route::get('/pages/dictionary', function () {
  return view('components.pages.dictionary');
});

Route::middleware([CheckAdminKey::class])->group(function () {
  Route::get('/admin', function (Request $request) {
      return view('components.admin.admin', ['getParams' => $request->all()]);
  });

  Route::get('/admin/verbs', [DictionaryController::class, 'addVerb'])->name('admin.addverb');
  Route::post('/admin/verbs', [DictionaryController::class, 'storeVerb']);

  Route::get('/admin/nouns', [DictionaryController::class, 'addNoun'])->name('admin.addnoun');
  Route::post('/admin/nouns', [DictionaryController::class, 'storeNoun']);
});
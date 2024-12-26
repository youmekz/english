<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\Admin\DictionaryController;


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

Route::get('/admin', function (Request $request) {
  $getParams = $request->all();

  if (empty($getParams) || $getParams['key'] != '123') {
    return redirect('/');
  }

  return view('components.pages.admin', compact('getParams'));
});

Route::get('/admin', [DictionaryController::class, 'index'])->name('admin');
Route::post('/admin', [DictionaryController::class, 'store']);

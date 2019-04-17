<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class FakerController extends Controller
{

  public static function handle(Request $request)
  {

    $randomName = $request->input('fake-name');

    if ($randomName) {
      return view('faker')->with('randomName', $randomName);
    } else {
      return view('faker');
    }
  }


}

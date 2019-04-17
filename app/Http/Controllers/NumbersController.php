<?php

namespace App\Http\Controllers;

use App\Http\Requests;

use Illuminate\Http\Request;

class NumbersController extends Controller
{

    public function calculate(Request $request)
    {

        /* add validation */

        $userInput = $request->input('user-input');

        $result = 0;

        if ($userInput) {
            $result = $userInput * 2;
        }

        return view('double')->with('calculated', $result);

    }

}

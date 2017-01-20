<?php

namespace App\Http\Controllers;

use App\Http\Requests;

use Illuminate\Http\Request;

class NumbersController extends Controller {
    
    
    public function calculate(Request $request){
       
       $userInput = $request->input('user-input');
       
        $result = $userInput * 2;
        
        return view('double')->with('calculated',$result);
        
    }
    
}

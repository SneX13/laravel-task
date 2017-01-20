<?php

namespace App\Http\Controllers;

use Carbon\Carbon; //PHP API extension for DateTime

class DatesController extends Controller {
    
    public function date(){
        
    $currentDate = Carbon::now()->format('Y-m-d');
    
    return view('date')->with('datenow',$currentDate);
}
}

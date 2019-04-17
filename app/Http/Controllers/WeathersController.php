<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WeathersController extends Controller
{

    protected $baseUrl;

    public function __construct()
    {
        $this->baseUrl = "http://www.yr.no/sted/";
    }

    public function show()
    {
        return view('weather');
    }

    public function handle($land, $fylke, $kommune, $stedsnavn)
    {

        try {
            $url = $this->baseUrl . "$land/$fylke/$kommune/$stedsnavn/varsel.xml";
            $xml = simplexml_load_file($url);


            if (!empty($xml)) {

                $currentforecast = $xml->forecast->tabular->time->symbol;

                $forecast = $xml->forecast->tabular->time->temperature;

                $current = [];

                foreach ($currentforecast->attributes() as $key => $value) {
                    $current[$key] = $value;
                }

                $weather = [];

                foreach ($forecast->attributes() as $key => $value) {
                    $weather[$key] = $value;
                }

                return view('weather')->with('name', $currentforecast['name'])->with('value', $weather['value'])->with('unit', $weather['unit']);
            } else {
                //
            }
        } catch (\Exception $e) {
            $error = "Sorry an error occurred. Please try again later";
            return view('weather')->with('error', $error);
        }
    }

}

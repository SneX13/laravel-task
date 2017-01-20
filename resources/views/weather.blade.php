@extends('masterpage')

@section('content')

    <div class="container">
        <div class="content">
            <div class="title">Current forecast is {{$name}} with {{$value . " " . $unit}} temperature</div>
           </div>
        </div>
        
      @stop
      
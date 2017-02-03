@extends('masterpage')

@section('content')

    <div class="container">
        <div class="content">
            <div>
                @if(isset($error)) 
                
               <p class="alert-danger">{{$error}}</p>
                
                @endif
            </div>
            
             @if(isset($name,$value,$unit))
            <div class="title">Current forecast is {{$name}} with {{$value . " " . $unit}} temperature</div>
            
            @endif
           </div>
        </div>
        
      @stop
      
@extends('masterpage')

@section('content') 

    <div class="container form">
       
        <form method="POST" action="/double">
            <input type="text=" name="user-input"/>
            <input type="submit" value="Submit" class="btn btn-primary"/>
            <input type="hidden" name="_token" value="{{ csrf_token() }}"> <!--would not work without it-->
        </form>
        <br/>
        @if (Request::isMethod('post'))
        
        <p><strong>Your number is {{$calculated}}</strong></p>
        
        @endif
        
        </div>
        
      @stop
      
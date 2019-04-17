@extends('masterpage')

@section('content')

    <div class="">
        <p>Write a number you want to multiply by 2</p>

        <form method="POST" action="/double">
            <input type="number" name="user-input"/> <!-- validate input to accept only numbers and prevent from sending empty-->
            <input type="submit" value="Submit" class="btn btn-default"/>
            <input type="hidden" name="_token" value="{{ csrf_token() }}"> <!--would not work without it-->
        </form>
        <br/>
        @if (Request::isMethod('post'))

        <p>Your number is <strong>{{$calculated}}</strong></p>

        @endif

        </div>

      @stop

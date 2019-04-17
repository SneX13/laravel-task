
@extends('masterpage')

@section('content')

  <h1>Click the button below to get random name from custom artisan command faker. </h1>
  <p>Or run <i>php artisan get:randname</i> from your terminal</p>
  <form method="POST" action="/faker">
    <button type="submit" name="fake-name" value="{{!! Illuminate\Support\Facades\Artisan::call('get:randname')}}" class="btn btn-default">Get name</button>
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
  </form>

  @if(isset($randomName))
  <h3>Random name is: <strong>{{$randomName}}</strong></h3>
  @endif

@stop

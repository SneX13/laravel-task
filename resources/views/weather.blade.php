@extends('masterpage')

@section('content')
    <div>
        <h1>To check weather write in address bar desired location in following format:</h1>
        <p>
            <i>- weather/Norge/Akershus/Frogn/Drøbak</i><br>
            <i>weather/Norge/Hordaland/Bergen/Bergen</i>
        </p>
        <div>
            @if(isset($error))
                <p class="alert-danger">{{$error}}</p>
            @endif
        </div>

        @if(isset($name,$value,$unit))
            <h3 >Current forecast is <span class="text-warning">{{$name}}</span> with <span class="text-warning">{{$value . " " . $unit}} </span> temperature</h3>

        @endif

    </div>

@stop

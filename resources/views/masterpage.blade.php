<!DOCTYPE html>
<html>
<head>
    <title>Laravel-task-test</title>

    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>

    <link href="https://fonts.googleapis.com/css?family=Lato:100,400" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/cover.css') }}" rel="stylesheet" type="text/css">
</head>
<body>
<div class="site-wrapper">

    <div class="site-wrapper-inner">

        <div class="cover-container">

            <div class="masthead clearfix">
                <div class="inner">
                    <h3 class="masthead-brand">Laravel introduction and test</h3>
                    <nav>
                        <ul class="nav masthead-nav">
                            <li class="{{ Route::currentRouteName() == 'home' ? 'active' : '' }}"><a href="/">Home</a></li>
                            <li class="{{ Route::currentRouteName() == 'task-one' ? 'active' : '' }}"><a href="{{ route('task-one') }}">Task 1</a></li>
                            <li class="{{ Route::currentRouteName() == 'task-two' ? 'active' : '' }}"><a href="{{ route('task-two') }}">Task 2</a></li>
                            <li class="{{ request()->is('weather') || request()->is('weather/*') ? 'active' : ''}}"><a href="{{ route('task-three') }}">Task 3</a></li>
                            <li class="{{ Route::currentRouteName() == 'task-four' ? 'active' : '' }}"><a href="{{ route('task-four') }}">Task 4</a></li>
                        </ul>
                    </nav>
                </div>
            </div>

            <div class="inner cover">
                @yield('content')
            </div>
        </div>
    </div>
</div>

</body>
</html>

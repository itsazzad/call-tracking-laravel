<html>
    <head>
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="{{ asset('css/main.css') }}" rel="stylesheet">
        <title>Automated surveys - @yield('title', 'Call tracking')</title>
    </head>
    <body>
        <nav class="navbar navbar-default">
            <div class="navbar-header">
                <a class="navbar-brand" href="/">Call tracking</a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="{{ route('available_number.index') }}">Numbers available for purchase</a></li>
                    <li><a href="{{ route('lead_source.index') }}">Lead sources</a></li>
                </ul>
            </div>
        </nav>
        <div class="container">
            @yield('content')
        </div>
        <footer class="container">
            Made with <i class="fa fa-heart"></i> by your pals
            <a href="http://www.twilio.com">@twilio</a>
        </footer>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        @yield('scripts')
    </body>
</html>